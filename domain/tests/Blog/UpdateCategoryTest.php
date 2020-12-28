<?php

namespace TYannis\SDS\Domain\Tests\Blog;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\UpdateCategoryPresenterInterface;
use TYannis\SDS\Domain\Blog\Request\UpdateCategoryRequest;
use TYannis\SDS\Domain\Blog\Response\UpdateCategoryResponse;
use TYannis\SDS\Domain\Blog\UseCase\UpdateCategory;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\CategoryRepository;

/**
 * Class UpdateCategoryTest
 * @package TYannis\SDS\Domain\Tests\Blog
 */
class UpdateCategoryTest extends TestCase
{
    /**
     * @var UpdateCategoryPresenterInterface
     */
    private UpdateCategoryPresenterInterface $presenter;

    /**
     * @var UpdateCategory
     */
    private UpdateCategory $useCase;

    public function setUp(): void
    {
        $this->presenter = new class () implements UpdateCategoryPresenterInterface {
            public UpdateCategoryResponse $response;

            public function present(UpdateCategoryResponse $response): void
            {
                $this->response = $response;
            }
        };
        $this->useCase = new UpdateCategory(new CategoryRepository());
    }

    public function testSuccessful(): void
    {
        $id = Uuid::uuid4();

        $request = UpdateCategoryRequest::create(
            $id,
            'My category'
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateCategoryResponse::class, $this->presenter->response);
        $this->assertInstanceOf(Category::class, $this->presenter->response->getCategory());

        $this->assertEquals($id, $this->presenter->response->getCategory()->getId());

        $this->assertEquals('My category', $this->presenter->response->getCategory()->getTitle());
    }

    /**
     * @dataProvider provideFailedData
     * @param string $title
     */
    public function testFailed(string $title)
    {
        $request = new UpdateCategoryRequest(Uuid::uuid4(), $title);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield [''];
        yield ['aa'];
    }
}
