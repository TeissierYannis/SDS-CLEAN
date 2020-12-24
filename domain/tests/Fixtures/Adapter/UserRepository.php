<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class UserRepository
 * @package TYannis\SDS\Domain\Tests\Fixtures\Adapter
 */
class UserRepository implements UserGateway
{
    /**
     * @param string|null $email
     * @return bool
     */
    public function isEmailUnique(?string $email): bool
    {
        return !in_array($email, ["used@email.com"]);
    }

    /**
     * @param string|null $pseudo
     * @return bool
     */
    public function isPseudoUnique(?string $pseudo): bool
    {
        return !in_array($pseudo, ["used_pseudo"]);
    }

    /**
     * @param User $user
     */
    public function register(User $user): void
    {
    }

    /**
     * @param string $email
     * @return User|null
     */
    public function getUserByEmail(string $email): ?User
    {
        if ($email !== "used@email.com") {
            return null;
        }
        return new User(
            Uuid::uuid4(),
            'used@email.com',
            'pseudo',
            password_hash('password', PASSWORD_ARGON2I)
        );
    }
}
