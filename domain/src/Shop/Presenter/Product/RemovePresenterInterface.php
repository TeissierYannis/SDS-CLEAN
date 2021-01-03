<?php

namespace TYannis\SDS\Domain\Shop\Presenter\Product;

use TYannis\SDS\Domain\Shop\Response\Product\RemoveResponse;

/**
 * Interface RemovePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface RemovePresenterInterface
{
    /**
     * @param RemoveResponse $response
     */
    public function present(RemoveResponse $response): void;
}
