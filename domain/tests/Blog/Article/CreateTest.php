<?php

namespace TYannis\SDS\Domain\Tests\Blog\Article;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Article\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;
use TYannis\SDS\Domain\Blog\Response\Article\CreateResponse;
use TYannis\SDS\Domain\Blog\UseCase\Article\Create;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ArticleRepository;

/**
 * Class CreateTest
 * @package TYannis\SDS\Domain\Tests\Blog
 */
class CreateTest extends TestCase
{
    /**
     * @var Create
     */
    private Create $useCase;

    /**
     * @var CreatePresenterInterface
     */
    private $presenter;

    public function testSuccessful(): void
    {
        $request = CreateRequest::create('Article title', 'My content', Category::create('My category'));


        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Article::class, $this->presenter->response->getArticle());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getArticle()->getId());

        $this->assertEquals('Article title', $this->presenter->response->getArticle()->getTitle());
        $this->assertEquals('My content', $this->presenter->response->getArticle()->getContent());

        $this->assertInstanceOf(Category::class, $this->presenter->response->getArticle()->getCategory());
        $this->assertEquals(
            'My category',
            $this->presenter->response->getArticle()->getCategory()->getTitle()
        );
    }

    /**
     * @dataProvider provideFailedData
     * @param string $articleTitle
     * @param string $articleContent
     * @param Category $category
     */
    public function testFailed(string $articleTitle, string $articleContent, Category $category)
    {
        $request = new CreateRequest($articleTitle, $articleContent, $category);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    public function provideFailedData(): Generator
    {
        yield ["", "My content", Category::create('My category')];
        yield ["My title", "", Category::create('My category')];
        yield ["My title", "My content", Category::create('')];

        yield ["My", "My content", Category::create('My category')];
        yield ["My title", "My", Category::create('My category')];
        yield ["My title", "My content", Category::create('My')];
    }

    protected function setUp(): void
    {
        $this->presenter = new class () implements CreatePresenterInterface {
            public CreateResponse $response;

            public function present(CreateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Create(new ArticleRepository());
    }
}
