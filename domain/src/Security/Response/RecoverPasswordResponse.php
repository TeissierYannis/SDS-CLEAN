<?php

namespace TYannis\SDS\Domain\Security\Response;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class RecoverPasswordResponse
 * @package TYannis\SDS\Domain\Security\Response
 */
class RecoverPasswordResponse
{
    /**
     * @var User
     */
    private User $user;

    /**
     * RecoverPasswordResponse constructor.
     * @param User $user
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
