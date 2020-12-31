<?php

namespace TYannis\SDS\Domain\Tests\Blog\Category;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Category\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Category\CreateRequest;
use TYannis\SDS\Domain\Blog\Response\Category\CreateResponse;
use TYannis\SDS\Domain\Blog\UseCase\Category\Create;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\CategoryRepository;

/**
 * Class CreateCategoryTest
 * @package TYannis\SDS\Domain\Tests\Blog\Category
 */
class CreateTest extends TestCase
{
    /**
     * @var CreatePresenterInterface
     */
    private CreatePresenterInterface $presenter;

    /**
     * @var Create
     */
    private Create $useCase;

    public function setUp(): void
    {
        $this->presenter = new class () implements CreatePresenterInterface {
            public CreateResponse $response;

            public function present(CreateResponse $response): void
            {
                $this->response = $response;
            }
        };
        $this->useCase = new Create(new CategoryRepository());
    }

    public function testSuccessful(): void
    {
        $request = CreateRequest::create('My category');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Category::class, $this->presenter->response->getCategory());
        $this->assertEquals('My category', $this->presenter->response->getCategory()->getTitle());
    }

    /**
     * @dataProvider provideFailedData
     * @param string $title
     */
    public function testFail(string $title)
    {
        $request = CreateRequest::create($title);

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
