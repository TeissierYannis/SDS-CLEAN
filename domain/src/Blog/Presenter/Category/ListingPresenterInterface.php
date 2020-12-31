<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Category;

use TYannis\SDS\Domain\Blog\Response\Category\ListingResponse;

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
