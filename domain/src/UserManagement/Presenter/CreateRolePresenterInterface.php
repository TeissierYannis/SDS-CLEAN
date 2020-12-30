<?php

namespace TYannis\SDS\Domain\UserManagement\Presenter;

use TYannis\SDS\Domain\UserManagement\Response\CreateRoleResponse;

/**
 * Interface CreateRolePresenterInterface
 * @package TYannis\SDS\Domain\UserManagement\Presenter
 */
interface CreateRolePresenterInterface
{
    /**
     * @param CreateRoleResponse $response
     */
    public function present(CreateRoleResponse $response): void;
}
