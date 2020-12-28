<?php

namespace TYannis\SDS\Domain\Blog\Presenter;

use TYannis\SDS\Domain\Blog\Response\ListingResponse;

/**
 * Interface ListingPresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface ListingPresenterInterface
{
    /**
     * @param ListingResponse $response
     */
    public function present(ListingResponse $response): void;
}
