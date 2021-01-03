<?php

namespace TYannis\SDS\Domain\Tests\Shop\Product;

use Assert\AssertionFailedException as AssertionFailedExceptionAlias;
use Generator;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Presenter\Product\CreatePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\CreateRequest;
use TYannis\SDS\Domain\Shop\Response\Product\CreateResponse;
use TYannis\SDS\Domain\Shop\UseCase\Product\Create;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ProductRepository;

/**
 * Class CreateTest
 * @package TYannis\SDS\Domain\Tests\Shop\Product
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

    protected function setUp()
    {
        $this->presenter = new class () implements CreatePresenterInterface {
            public CreateResponse $response;

            public function present(CreateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Create(new ProductRepository());
    }


    public function testSuccessful(): void
    {
        $request = CreateRequest::create('Product 1', 'Description of product 1', 20.5, '/image/product/image.png');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(Product::class, $this->presenter->response->getProduct());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getProduct()->getId());

        $this->assertEquals('Product 1', $this->presenter->response->getProduct()->getName());
        $this->assertEquals('Description of product 1', $this->presenter->response->getProduct()->getDescription());
        $this->assertEquals(20.5, $this->presenter->response->getProduct()->getPrice());
        $this->assertEquals('/image/product/image.png', $this->presenter->response->getProduct()->getImage());
    }

    /**
     * @dataProvider provideFailedData
     * @param  string  $name
     * @param  string  $description
     * @param  float  $price
     * @param  string  $image
     * @throws AssertionFailedExceptionAlias
     */
    public function testFailed(string $name, string $description, float $price, string $image)
    {
        $request = CreateRequest::create($name, $description, $price, $image);

        $this->expectException(AssertionFailedExceptionAlias::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield ['', 'description', 20, '/image/...'];
        yield ['name', '', 20, '/image/...'];
        yield ['name', 'description', 20.5, ''];
        yield ['na', 'description', 20.5, '/image/...'];
        yield ['name', 'de', 20.5, '/image/...'];
    }
}
