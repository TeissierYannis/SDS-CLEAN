<?php

namespace TYannis\SDS\Domain\UserManagement\Response\Role;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class UpdateResponse
 * @package TYannis\SDS\Domain\UserManagement\Response
 */
class UpdateResponse
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UpdateResponse constructor.
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
