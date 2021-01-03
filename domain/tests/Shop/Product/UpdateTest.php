<?php

namespace TYannis\SDS\Domain\Tests\Shop\Product;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Presenter\Product\UpdatePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\UpdateRequest;
use TYannis\SDS\Domain\Shop\Response\Product\UpdateResponse;
use TYannis\SDS\Domain\Shop\UseCase\Product\Update;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ProductRepository;

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
            'Product',
            'Description',
            12.3,
            '/../.'
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Product::class, $this->presenter->response->getProduct());
        $this->assertEquals($id, $this->presenter->response->getProduct()->getId());

        $this->assertEquals('Product', $this->presenter->response->getProduct()->getName());
        $this->assertEquals('Description', $this->presenter->response->getProduct()->getDescription());
        $this->assertEquals(12.3, $this->presenter->response->getProduct()->getPrice());
        $this->assertEquals('/../.', $this->presenter->response->getProduct()->getImage());
    }

    /**
     * @dataProvider provideFailedData
     * @param  string  $name
     * @param  string  $description
     * @param  float  $price
     * @param  string  $image
     * @throws AssertionFailedException
     */
    public function testFailed(string $name, string $description, float $price, string $image)
    {
        $request = new UpdateRequest(Uuid::uuid4(), $name, $description, $price, $image);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    public function provideFailedData(): Generator
    {
        yield ['', 'Description', 12, '/../'];
        yield ['Name', '', 12, '/../'];
        yield ['Name', 'Description', 12, ''];
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

        $this->useCase = new Update(new ProductRepository());
    }
}
