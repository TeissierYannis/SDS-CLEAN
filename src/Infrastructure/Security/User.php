<?php

namespace App\Infrastructure\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use TYannis\SDS\Domain\Security\Entity\User as UserDomain;

class User implements UserInterface
{
    /**
     * @var UserDomain
     */
    private UserDomain $user;

    /**
     * User constructor.
     *
     * @param UserDomain $user
     */
    public function __construct(UserDomain $user)
    {
        $this->user = $user;
    }

    public function getRoles()
    {
        return [$this->user->getRoles()[0]];
    }

    public function getPassword()
    {
        return $this->user->getPassword();
    }

    public function getSalt()
    {
    }

    public function getUsername()
    {
        return $this->user->getEmail();
    }

    public function eraseCredentials()
    {
    }
}
