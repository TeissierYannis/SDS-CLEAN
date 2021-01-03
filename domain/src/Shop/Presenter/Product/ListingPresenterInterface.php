<?php

namespace TYannis\SDS\Domain\Shop\Presenter\Product;

use TYannis\SDS\Domain\Shop\Response\Product\ListingResponse;

/**
 * Interface ListingPresenterInterface
 * @package TYannis\SDS\Domain\Shop\Presenter\Product
 */
interface ListingPresenterInterface
{
    /**
     * @param  ListingResponse  $response
     */
    public function present(ListingResponse $response): void;
}
