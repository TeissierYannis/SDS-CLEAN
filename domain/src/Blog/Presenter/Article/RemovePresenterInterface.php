<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Article;

use TYannis\SDS\Domain\Blog\Response\Article\RemoveResponse;

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
