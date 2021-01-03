<?php

namespace TYannis\SDS\Domain\Shop\Response\Product;

use TYannis\SDS\Domain\Shop\Entity\Product;

/**
 * Class UpdateResponse
 * @package TYannis\SDS\Domain\Shop\Response\Product
 */
class UpdateResponse
{
    /**
     * @var Product
     */
    private Product $product;

    /**
     * Update constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }
}
