<?php

namespace TYannis\SDS\Domain\Blog\Presenter;

use TYannis\SDS\Domain\Blog\Response\ListingCategoriesResponse;

/**
 * Interface ListingCategoriesPresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter
 */
interface ListingCategoriesPresenterInterface
{
    /**
     * @param ListingCategoriesResponse $response
     */
    public function present(ListingCategoriesResponse $response): void;
}
