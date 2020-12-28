<?php

namespace TYannis\SDS\Domain\Tests\Blog;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Presenter\ListingPresenterInterface;
use TYannis\SDS\Domain\Blog\Request\ListingRequest;
use TYannis\SDS\Domain\Blog\Response\ListingResponse;
use TYannis\SDS\Domain\Blog\UseCase\Listing;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ArticleRepository;

/**
 * Class ListingTest
 * @package TYannis\SDS\Domain\Tests\Blog
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

    protected function setUp()
    {
        $this->presenter = new class() implements ListingPresenterInterface {
            public ListingResponse $response;

            public function present(ListingResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Listing(new ArticleRepository());

    }

    /**
     * @dataProvider provideGoodData
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     * @param int $pages
     * @param int $count
     * @throws AssertionFailedException
     */
    public function testSuccessful(int $page, int $limit, string $field, string $order, int $pages, int $count): void
    {
        $request = new ListingRequest($page, $limit, $field, $order);

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(ListingResponse::class, $this->presenter->response);
        $this->containsOnlyInstancesOf(Article::class, $this->presenter->response->getArticles());
        $this->assertEquals($page, $this->presenter->response->getCurrentPage());
        $this->assertEquals($limit, $this->presenter->response->getLimit());
        $this->assertEquals($pages, $this->presenter->response->getPages());
        $this->assertCount($count, $this->presenter->response->getArticles());
        $this->assertEquals($field, $this->presenter->response->getField());
        $this->assertEquals($order, $this->presenter->response->getOrder());
    }

    /**
     * @dataProvider provideFailedData
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     * @param int $pages
     * @param int $count
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
        yield [1, 10, "title", 'asc', 3, 10];
        yield [3, 10, "title", 'asc', 3, 5];
        yield [1, 25, "title", 'asc', 1, 25];
        yield [1, 50, "title", 'asc', 1, 25];
        yield [1, 100, "title", 'asc', 1, 25];
    }
    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield [4, 10, "title", 'asc', 3, 10];
        yield [0, 10, "title", 'asc', 3, 10];
        yield [3, 15, "title", 'asc', 3, 5];
        yield [1, 25, "fail", 'asc', 1, 25];
        yield [1, 50, "title", 'fail', 1, 25];
    }
}
