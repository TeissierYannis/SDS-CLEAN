<?php

namespace TYannis\SDS\Domain\Blog\Presenter\Article;

use TYannis\SDS\Domain\Blog\Response\Article\ListingResponse;

/**
 * Interface ListingPresenterInterface
 * @package TYannis\SDS\Domain\Blog\Presenter\Article
 */
interface ListingPresenterInterface
{
    /**
     * @param ListingResponse $response
     */
    public function present(ListingResponse $response): void;
}
