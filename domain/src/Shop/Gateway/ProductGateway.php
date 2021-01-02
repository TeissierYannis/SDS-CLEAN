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
}