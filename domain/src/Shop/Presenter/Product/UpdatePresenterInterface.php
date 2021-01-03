<?php

namespace TYannis\SDS\Domain\Shop\Presenter\Product;

use TYannis\SDS\Domain\Shop\Response\Product\UpdateResponse;

/**
 * Interface UpdatePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter\Product
 */
interface UpdatePresenterInterface
{
    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void;
}
