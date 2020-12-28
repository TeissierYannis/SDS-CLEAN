<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Article;

use TYannis\SDS\Domain\Blog\Response\Article\UpdateResponse;

/**
 * Interface UpdatePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter\Article
 */
interface UpdatePresenterInterface
{
    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void;
}
