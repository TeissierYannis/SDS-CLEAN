<?php

namespace TYannis\SDS\Domain\Blog\Presenter;

use TYannis\SDS\Domain\Blog\Response\UpdateResponse;

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
