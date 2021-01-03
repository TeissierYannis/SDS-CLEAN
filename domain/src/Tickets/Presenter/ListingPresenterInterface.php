<?php

namespace TYannis\SDS\Domain\Tickets\Presenter;

use TYannis\SDS\Domain\Tickets\Response\ListingResponse;

/**
 * Interface ListingPresenterInterface
 * @package TYannis\SDS\Domain\Tickets\Presenter
 */
interface ListingPresenterInterface
{
    /**
     * @param ListingResponse $response
     */
    public function present(ListingResponse $response): void;
}
