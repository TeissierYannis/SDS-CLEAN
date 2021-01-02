<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

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
}