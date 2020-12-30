<?php

namespace TYannis\SDS\Domain\UserManagement\Presenter;

use TYannis\SDS\Domain\UserManagement\Response\UpdateRoleResponse;

/**
 * Interface UpdateRolePresenterInterface
 * @package TYannis\SDS\Domain\UserManagement\Presenter
 */
interface UpdateRolePresenterInterface
{
    /**
     * @param UpdateRoleResponse $response
     */
    public function present(UpdateRoleResponse $response): void;
}
