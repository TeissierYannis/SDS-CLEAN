<?php

namespace TYannis\SDS\Domain\Tests\Blog\Article;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Article\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\UpdateRequest;
use TYannis\SDS\Domain\Blog\Response\Article\UpdateResponse;
use TYannis\SDS\Domain\Blog\UseCase\Article\Update;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ArticleRepository;

/**
 * Class UpdateTest
 * @package TYannis\SDS\Domain\Tests\Blog
 */
class UpdateTest extends TestCase
{
    /**
     * @var Update
     */
    private Update $useCase;

    /**
     * @var UpdatePresenterInterface
     */
    private $presenter;

    public function testSuccessful(): void
    {
        $id = Uuid::uuid4();

        $request = UpdateRequest::create(
            $id,
            'Article title',
            'My content',
            Category::create('My category')
        );


        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Article::class, $this->presenter->response->getArticle());
        $this->assertEquals($id, $this->presenter->response->getArticle()->getId());

        $this->assertEquals('Article title', $this->presenter->response->getArticle()->getTitle());
        $this->assertEquals('My content', $this->presenter->response->getArticle()->getContent());

        $this->assertInstanceOf(Category::class, $this->presenter->response->getArticle()->getCategory());
        $this->assertEquals(
            'My category',
            $this->presenter->response->getArticle()->getCategory()->getTitle()
        );

        $category = $this->presenter->response->getArticle()->getCategory();
    }

    /**
     * @dataProvider provideFailedData
     * @param string $articleTitle
     * @param string $articleContent
     * @param Category $category
     */
    public function testFailed(string $articleTitle, string $articleContent, Category $category)
    {
        $request = new UpdateRequest(Uuid::uuid4(), $articleTitle, $articleContent, $category);

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
        $this->presenter = new class () implements UpdatePresenterInterface {
            public UpdateResponse $response;

            public function present(UpdateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Update(new ArticleRepository());
    }
}
