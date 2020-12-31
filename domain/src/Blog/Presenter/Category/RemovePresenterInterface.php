<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Category;

use TYannis\SDS\Domain\Blog\Response\Category\RemoveResponse;

/**
 * Interface RemovePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter\Category
 */
interface RemovePresenterInterface
{
    /**
     * @param RemoveResponse $response
     */
    public function present(RemoveResponse $response): void;
}
