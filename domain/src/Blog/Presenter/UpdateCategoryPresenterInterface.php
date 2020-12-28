<?php

namespace TYannis\SDS\Domain\Blog\Presenter;

use TYannis\SDS\Domain\Blog\Response\UpdateCategoryResponse;

/**
 * Interface UpdateCategoryPresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface UpdateCategoryPresenterInterface
{
    /**
     * @param UpdateCategoryResponse $response
     */
    public function present(UpdateCategoryResponse $response): void;
}
