<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Category;

use TYannis\SDS\Domain\Blog\Response\Category\UpdateResponse;

/**
 * Interface UpdatePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface UpdatePresenterInterface
{
    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void;
}
