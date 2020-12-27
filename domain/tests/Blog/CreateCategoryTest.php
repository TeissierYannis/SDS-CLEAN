<?php

namespace TYannis\SDS\Domain\Tests\Blog;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\CreateCategoryPresenterInterface;
use TYannis\SDS\Domain\Blog\Request\CreateCategoryRequest;
use TYannis\SDS\Domain\Blog\Response\CreateCategoryResponse;
use TYannis\SDS\Domain\Blog\UseCase\CreateCategory;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\CategoryRepository;

/**
 * Class CreateCategoryTest
 * @package TYannis\SDS\Domain\Tests\Blog
 */
class CreateCategoryTest extends TestCase
{
    /**
     * @var CreateCategoryPresenterInterface
     */
    private CreateCategoryPresenterInterface $presenter;

    /**
     * @var CreateCategory
     */
    private CreateCategory $useCase;

    public function setUp(): void
    {
        $this->presenter = new class () implements CreateCategoryPresenterInterface {
            public CreateCategoryResponse $response;

            public function present(CreateCategoryResponse $response): void
            {
                $this->response = $response;
            }
        };
        $this->useCase = new CreateCategory(new CategoryRepository());
    }

    public function testSuccessful(): void
    {
        $request = CreateCategoryRequest::create('My category');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateCategoryResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Category::class, $this->presenter->response->getCategory());
        $this->assertEquals('My category', $this->presenter->response->getCategory()->getTitle());
    }

    /**
     * @dataProvider provideFailedData
     * @param string $title
     */
    public function testFail(string $title)
    {
        $request = CreateCategoryRequest::create($title);

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
