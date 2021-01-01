<?php

namespace TYannis\SDS\Domain\Tests\Blog\Article;

use Assert\AssertionFailedException;
use DateTime;
use DateTimeInterface;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Article\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;
use TYannis\SDS\Domain\Blog\Response\Article\CreateResponse;
use TYannis\SDS\Domain\Blog\UseCase\Article\Create;
use TYannis\SDS\Domain\Security\Entity\User;
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
        $request = CreateRequest::create(
            'Article title',
            'My content',
            Category::create('My category'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Article::class, $this->presenter->response->getArticle());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getArticle()->getId());

        $this->assertEquals('Article title', $this->presenter->response->getArticle()->getTitle());
        $this->assertEquals('My content', $this->presenter->response->getArticle()->getContent());
        $this->assertInstanceOf(DateTimeInterface::class, $this->presenter->response->getArticle()->getCreatedAt());

        $this->assertInstanceOf(Category::class, $this->presenter->response->getArticle()->getCategory());
        $this->assertEquals(
            'My category',
            $this->presenter->response->getArticle()->getCategory()->getTitle()
        );
        $this->assertInstanceOf(User::class, $this->presenter->response->getArticle()->getRedactor());
    }

    /**
     * @dataProvider provideFailedData
     * @param  string  $articleTitle
     * @param  string  $articleContent
     * @param  Category  $category
     * @param  DateTimeInterface  $createdAt
     * @param  User  $redactor
     * @throws AssertionFailedException
     */
    public function testFailed(
        string $articleTitle,
        string $articleContent,
        Category $category,
        DateTimeInterface $createdAt,
        User $redactor
    ) {
        $request = new CreateRequest($articleTitle, $articleContent, $category, $createdAt, $redactor);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    public function provideFailedData(): Generator
    {
        yield [
            "",
            "My content",
            Category::create('My category'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];
        yield [
            "My title",
            "",
            Category::create('My category'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];
        yield [
            "My title",
            "My content",
            Category::create(''),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];

        yield [
            "My",
            "My content",
            Category::create('My category'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];
        yield [
            "My title",
            "My",
            Category::create('My category'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];
        yield [
            "My title",
            "My content",
            Category::create('My'),
            new DateTime(),
            new User(
                Uuid::uuid4(),
                'email@email.com',
                'pseudo',
                'password',
                true,
                ['ROLE_REDACTOR']
            )
        ];
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
