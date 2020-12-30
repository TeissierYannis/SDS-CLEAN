<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use DateTimeImmutable;
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
     * @param string $email
     * @return User|null
     */
    public function getUserByEmail(string $email): ?User
    {
        if ($email !== "used@email.com") {
            return null;
        }

        $user = new User(
            Uuid::uuid4(),
            'used@email.com',
            'pseudo',
            password_hash('password', PASSWORD_ARGON2I),
            true,
            'bb4b5730-6057-4fa1-a27b-692b9ba8c14a',
            new DateTimeImmutable()
        );

        return $user;
    }

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
     * @param User $user
     */
    public function update(User $user): void
    {
    }
}
