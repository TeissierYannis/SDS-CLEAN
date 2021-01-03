<?php

namespace TYannis\SDS\Domain\Tests\Shop\Product;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Shop\Presenter\Product\RemovePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\RemoveRequest;
use TYannis\SDS\Domain\Shop\Response\Product\RemoveResponse;
use TYannis\SDS\Domain\Shop\UseCase\Product\Remove;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\ProductRepository;

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

    public function test(): void
    {
        $id = Uuid::uuid4();

        $request = RemoveRequest::create(
            $id,
            'Product',
            'Description',
            12,
            '/../.'
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(RemoveResponse::class, $this->presenter->response);

        $this->assertEquals(null, $this->presenter->response->getProduct());
    }

    protected function setUp(): void
    {
        $this->presenter = new class () implements RemovePresenterInterface {
            public RemoveResponse $response;

            public function present(RemoveResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Remove(new ProductRepository());
    }
}
