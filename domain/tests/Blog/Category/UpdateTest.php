<?php

namespace TYannis\SDS\Domain\Tests\Blog\Category;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Presenter\Category\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Category\UpdateRequest;
use TYannis\SDS\Domain\Blog\Response\Category\UpdateResponse;
use TYannis\SDS\Domain\Blog\UseCase\Category\Update;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\CategoryRepository;

/**
 * Class UpdateCategoryTest
 * @package TYannis\SDS\Domain\Tests\Blog\Category
 */
class UpdateTest extends TestCase
{
    /**
     * @var UpdatePresenterInterface
     */
    private UpdatePresenterInterface $presenter;

    /**
     * @var Update
     */
    private Update $useCase;

    public function setUp(): void
    {
        $this->presenter = new class () implements UpdatePresenterInterface {
            public UpdateResponse $response;

            public function present(UpdateResponse $response): void
            {
                $this->response = $response;
            }
        };
        $this->useCase = new Update(new CategoryRepository());
    }

    public function testSuccessful(): void
    {
        $id = Uuid::uuid4();

        $request = UpdateRequest::create(
            $id,
            'My category'
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateResponse::class, $this->presenter->response);
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
        $request = new UpdateRequest(Uuid::uuid4(), $title);

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
