<?php

namespace TYannis\SDS\Domain\UserManagement\Presenter\Role;

use TYannis\SDS\Domain\UserManagement\Response\Role\UpdateResponse;

/**
 * Interface UpdatePresenterInterface
 * @package TYannis\SDS\Domain\UserManagement\Presenter
 */
interface UpdatePresenterInterface
{
    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void;
}
