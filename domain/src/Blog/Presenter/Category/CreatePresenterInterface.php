<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Category;

use TYannis\SDS\Domain\Blog\Response\Category\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
