<?php

namespace TYannis\SDS\Domain\Tests\Blog\Category;

use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Blog\Presenter\Category\RemovePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Category\RemoveRequest;
use TYannis\SDS\Domain\Blog\Response\Category\RemoveResponse;
use TYannis\SDS\Domain\Blog\UseCase\Category\Remove;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\CategoryRepository;

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

        $this->useCase = new Remove(new CategoryRepository());
    }

    public function test(): void
    {
        $id = Uuid::uuid4();

        $request = RemoveRequest::create(
            $id,
            'Category title'
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(RemoveResponse::class, $this->presenter->response);
        $this->assertEquals(null, $this->presenter->response->getCategory());
    }
}
