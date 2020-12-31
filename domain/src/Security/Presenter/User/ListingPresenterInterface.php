<?php

namespace TYannis\SDS\Domain\Security\Presenter\User;

use TYannis\SDS\Domain\Security\Response\User\ListingResponse;

/**
 * Interface ListingPresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter
 */
interface ListingPresenterInterface
{
    /**
     * @param ListingResponse $response
     */
    public function present(ListingResponse $response): void;
}
