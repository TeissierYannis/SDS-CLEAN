<?php

namespace TYannis\SDS\Domain\Blog\Presenter;

use TYannis\SDS\Domain\Blog\Response\CreateCategoryResponse;

/**
 * Interface CreateCategoryPresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface CreateCategoryPresenterInterface
{
    /**
     * @param CreateCategoryResponse $response
     */
    public function present(CreateCategoryResponse $response): void;
}
