<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;

/**
 * Class ProductRepository
 * @package TYannis\SDS\Domain\Tests\Fixtures\Adapter
 */
class ProductRepository implements ProductGateway
{
    public function create(Product $product): void
    {
    }

    /**
     * @return int
     */
    public function countProducts(): int
    {
        return 25;
    }

    /**
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return array
     */
    public function getProducts(int $page, int $limit, string $field, string $order): array
    {
        $products = array_fill(
            0,
            25,
            new Product(
                Uuid::uuid4(),
                'name',
                'description',
                27.7,
                '/.../'
            )
        );

        return array_slice($products, ($page - 1) * $limit, $limit);
    }
}
