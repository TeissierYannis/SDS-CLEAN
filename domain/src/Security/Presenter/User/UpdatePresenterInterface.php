<?php

namespace TYannis\SDS\Domain\Security\Presenter\User;

use TYannis\SDS\Domain\Security\Response\User\UpdateResponse;

/**
 * Interface UpdatePresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter\User
 */
interface UpdatePresenterInterface
{
    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void;
}
