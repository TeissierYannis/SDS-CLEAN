<?php

namespace TYannis\SDS\Domain\Security\Gateway;

use TYannis\SDS\Domain\Security\Entity\Role;

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

    /**
     * @param  string  $name
     * @return mixed
     */
    public function isRoleUnique(string $name): bool;
}
