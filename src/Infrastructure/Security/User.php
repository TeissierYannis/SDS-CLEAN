<?php

namespace App\Infrastructure\Security;

use TYannis\SDS\Domain\Security\Entity\User as UserDomain;
use Symfony\Component\Security\Core\User\UserInterface;

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
        return ['ROLE_USER'];
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
