<?php

namespace TYannis\SDS\Domain\Security\Response\Role;

use TYannis\SDS\Domain\Security\Entity\Role;

/**
 * Class CreateResponse
 * @package TYannis\SDS\Domain\Security\Response\Role
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
