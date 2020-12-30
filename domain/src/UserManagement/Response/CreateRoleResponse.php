<?php

namespace TYannis\SDS\Domain\UserManagement\Response;

use TYannis\SDS\Domain\UserManagement\Entity\Role;

/**
 * Class CreateRoleResponse
 * @package TYannis\SDS\Domain\UserManagement\Response
 */
class CreateRoleResponse
{
    /**
     * @var Role
     */
    private Role $role;

    /**
     * CreateRoleResponse constructor.
     * @param  Role  $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }
}
