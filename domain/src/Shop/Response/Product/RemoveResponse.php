<?php

namespace TYannis\SDS\Domain\Shop\Response\Product;

use TYannis\SDS\Domain\Shop\Entity\Product;

/**
 * Class RemoveResponse
 * @package TYannis\SDS\Domain\Shop\Response\Product
 */
class RemoveResponse
{
    /**
     * @var Product|null
     */
    private ?Product $product;

    /**
     * RemoveResponse constructor.
     * @param Product |null $product
     */
    public function __construct(?Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product|null
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }
}
