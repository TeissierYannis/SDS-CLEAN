<?php

namespace TYannis\SDS\Domain\UserManagement\Gateway;

use TYannis\SDS\Domain\UserManagement\Entity\Role;

/**
 * Interface RoleGateway
 * @package TYannis\SDS\Domain\UserManagement\Gateway
 */
interface RoleGateway
{
    /**
     * @return array
     */
    public function getRoles(): array;

    /**
     * @param  Role  $role
     */
    public function create(Role $role): void;
}
