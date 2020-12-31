<?php

namespace App\Infrastructure\Security\Provider;

use App\Infrastructure\Security\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class UserProvider
 *
 * @package App\Infrastructure\Security\Provider
 */
class UserProvider implements UserProviderInterface
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * UserProvider constructor.
     *
     * @param  UserGateway  $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @inheritDoc
     */
    public function loadUserByUsername(string $username)
    {
        return $this->getUserByUsername($username);
    }

    /**
     * @inheritDoc
     */
    public function refreshUser(UserInterface $user)
    {
        return $this->getUserByUsername($user->getUsername());
    }

    /**
     * @inheritDoc
     */
    public function supportsClass(string $class)
    {
        return $class === User::class;
    }

    /**
     * @param string $username
     *
     * @return User
     */
    private function getUserByUsername(string $username): User
    {
        $user = $this->userGateway->getUserByEmail($username);
        if ($user === null) {
            throw new UsernameNotFoundException();
        }
        return new User($user);
    }
}
