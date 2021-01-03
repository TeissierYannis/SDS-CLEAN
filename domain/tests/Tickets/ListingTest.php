<?php

namespace TYannis\SDS\Domain\Tests\Tickets;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\TicketRepository;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Presenter\ListingPresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\ListingRequest;
use TYannis\SDS\Domain\Tickets\Response\ListingResponse;
use TYannis\SDS\Domain\Tickets\UseCase\Listing;

/**
 * Class ListingTest
 * @package TYannis\SDS\Domain\Tests\Tickets
 */
class ListingTest extends TestCase
{
    /**
     * @var ListingPresenterInterface
     */
    private $presenter;
    /**
     * @var Listing
     */
    private Listing $useCase;

    /**
     * @dataProvider provideGoodData
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @param  int  $pages
     * @param  int  $count
     * @throws AssertionFailedException
     */
    public function testSuccessful(int $page, int $limit, string $field, string $order, int $pages, int $count): void
    {
        $request = new ListingRequest($page, $limit, $field, $order);

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(ListingResponse::class, $this->presenter->response);
        $this->containsOnlyInstancesOf(Ticket::class, $this->presenter->response->getTickets());
        $this->assertEquals($page, $this->presenter->response->getCurrentPage());
        $this->assertEquals($limit, $this->presenter->response->getLimit());
        $this->assertEquals($pages, $this->presenter->response->getPages());
        $this->assertCount($count, $this->presenter->response->getTickets());
        $this->assertEquals($field, $this->presenter->response->getField());
        $this->assertEquals($order, $this->presenter->response->getOrder());
    }

    /** @dataProvider provideFailedData
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @param  int  $pages
     * @param  int  $count
     */
    public function testFailed(int $page, int $limit, string $field, string $order, int $pages, int $count)
    {
        $request = new ListingRequest($page, $limit, $field, $order);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideGoodData(): Generator
    {
        yield [1, 10, "state", 'asc', 3, 10];
        yield [3, 10, "state", 'asc', 3, 5];
        yield [1, 25, "state", 'asc', 1, 25];
        yield [1, 50, "state", 'asc', 1, 25];
        yield [1, 100, "state", 'asc', 1, 25];
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield [4, 10, "state", 'asc', 3, 10];
        yield [0, 10, "state", 'asc', 3, 10];
        yield [3, 15, "state", 'asc', 3, 5];
        yield [1, 25, "fail", 'asc', 1, 25];
        yield [1, 50, "state", 'fail', 1, 25];
    }

    protected function setUp()
    {
        $this->presenter = new class () implements ListingPresenterInterface {
            public ListingResponse $response;

            public function present(ListingResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Listing(new TicketRepository());
    }
}
