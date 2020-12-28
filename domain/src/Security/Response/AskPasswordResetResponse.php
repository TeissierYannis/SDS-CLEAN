<?php

namespace TYannis\SDS\Domain\Security\Response;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class AskPasswordResetResponse
 * @package TYannis\SDS\Domain\Security\Response
 */
class AskPasswordResetResponse
{
    /**
     * @var User|null
     */
    private ? User $user;

    /**
     * AskPasswordResetResponse constructor.
     * @param User|null $user
     */
    public function __construct(?User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }
}
