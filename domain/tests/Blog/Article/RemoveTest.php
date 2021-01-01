<?php

namespace TYannis\SDS\Domain\Tests\Blog\Article;

use DateTime;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Article\RemovePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\RemoveRequest;
use TYannis\SDS\Domain\Blog\Response\Article\RemoveResponse;
use TYannis\SDS\Domain\Blog\UseCase\Article\Remove;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ArticleRepository;

/**
 * Class RemoveTest
 * @package TYannis\SDS\Domain\Tests\Blog
 */
class RemoveTest extends TestCase
{
    /**
     * @var RemovePresenterInterface
     */
    private RemovePresenterInterface $presenter;

    /**
     * @var Remove
     */
    private Remove $useCase;

    protected function setUp(): void
    {
        $this->presenter = new class () implements RemovePresenterInterface {
            public RemoveResponse $response;

            public function present(RemoveResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Remove(new ArticleRepository());
    }

    public function test(): void
    {
        $id = Uuid::uuid4();

        $request = RemoveRequest::create(
            $id,
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

        $this->assertInstanceOf(RemoveResponse::class, $this->presenter->response);

        $this->assertEquals(null, $this->presenter->response->getArticle());
    }
}
