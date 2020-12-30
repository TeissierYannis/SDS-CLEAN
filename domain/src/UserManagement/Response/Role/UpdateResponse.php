<?php

namespace TYannis\SDS\Domain\UserManagement\Response;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class UpdateRoleResponse
 * @package TYannis\SDS\Domain\UserManagement\Response
 */
class UpdateRoleResponse
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UpdateRoleResponse constructor.
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
