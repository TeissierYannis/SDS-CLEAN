<?php

namespace TYannis\SDS\Domain\Tests\Shop\Product;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Presenter\Product\ListingPresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\ListingRequest;
use TYannis\SDS\Domain\Shop\Response\Product\ListingResponse;
use TYannis\SDS\Domain\Shop\UseCase\Product\Listing;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ProductRepository;

/**
 * Class ListingTest
 * @package TYannis\SDS\Domain\Tests\Shop\Product
 */
class ListingTest extends TestCase
{
    /**
     * @var ListingPresenterInterface
     */
    private ListingPresenterInterface $presenter;

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
        $this->containsOnlyInstancesOf(Product::class, $this->presenter->response->getProducts());
        $this->assertEquals($page, $this->presenter->response->getCurrentPage());
        $this->assertEquals($limit, $this->presenter->response->getLimit());
        $this->assertEquals($pages, $this->presenter->response->getPages());
        $this->assertCount($count, $this->presenter->response->getProducts());
        $this->assertEquals($field, $this->presenter->response->getField());
        $this->assertEquals($order, $this->presenter->response->getOrder());
    }

    /**
     * @dataProvider provideFailedData
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
        yield [1, 10, "name", 'asc', 3, 10];
        yield [3, 10, "name", 'asc', 3, 5];
        yield [1, 25, "name", 'asc', 1, 25];
        yield [1, 50, "name", 'asc', 1, 25];
        yield [1, 100, "price", 'asc', 1, 25];
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield [4, 10, "name", 'asc', 3, 10];
        yield [0, 10, "name", 'asc', 3, 10];
        yield [3, 15, "name", 'asc', 3, 5];
        yield [1, 25, "fail", 'asc', 1, 25];
        yield [1, 50, "name", 'fail', 1, 25];
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

        $this->useCase = new Listing(new ProductRepository());
    }
}
