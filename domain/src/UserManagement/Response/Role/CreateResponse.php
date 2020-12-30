<?php

namespace TYannis\SDS\Domain\UserManagement\Response\Role;

use TYannis\SDS\Domain\UserManagement\Entity\Role;

/**
 * Class CreateResponse
 * @package TYannis\SDS\Domain\UserManagement\Response
 */
class CreateResponse
{
    /**
     * @var Role
     */
    private Role $role;

    /**
     * CreateResponse constructor.
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
