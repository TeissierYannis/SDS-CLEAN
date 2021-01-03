<?php

namespace TYannis\SDS\Domain\Shop\Gateway;

use TYannis\SDS\Domain\Shop\Entity\Product;

/**
 * Interface ProductGateway
 * @package TYannis\SDS\Domain\Shop\Gateway
 */
interface ProductGateway
{
    /**
     * @param  Product  $product
     */
    public function create(Product $product): void;

    /**
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return array
     */
    public function getProducts(int $page, int $limit, string $field, string $order): array;

    /**
     * @return int
     */
    public function countProducts(): int;
}
