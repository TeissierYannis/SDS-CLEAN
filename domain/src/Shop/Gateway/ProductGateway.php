<?php

namespace TYannis\SDS\Domain\Shop\Gateway;

use Ramsey\Uuid\UuidInterface;
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

    /**
     * @param  UuidInterface  $id
     * @return Product|null
     */
    public function getProductById(UuidInterface $id): ?Product;

    /**
     * @param  Product  $product
     */
    public function update(Product $product): void;

    /**
     * @param  Product  $product
     */
    public function remove(Product $product): bool;
}
