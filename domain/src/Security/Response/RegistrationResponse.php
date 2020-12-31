<?php

namespace TYannis\SDS\Domain\Security\Response;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class RegistrationResponse
 *
 * @package TYannis\SDS\Domain\Security\Response
 */
class RegistrationResponse
{
    /**
     * @var User
     */
    private User $user;

    /**
     * RegistrationResponse constructor.
     *
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
