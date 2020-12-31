<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Article;

use TYannis\SDS\Domain\Blog\Response\Article\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter\Article
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
