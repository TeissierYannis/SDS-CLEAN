<?php

namespace App\Infrastructure\Test\Adapter\Repository;

use DateTimeImmutable;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class UserRepository
 * @package App\Infrastructure\Test\Adapter\Repository
 */
class UserRepository implements UserGateway
{
    /**
     * @inheritDoc
     */
    public function getUserByEmail(string $email): ?User
    {
        if ($email !== "used@email.com") {
            return null;
        }

        return new User(
            Uuid::uuid4(),
            "used@email.com",
            "pseudo",
            password_hash("password", PASSWORD_ARGON2I),
            'bb4b5730-6057-4fa1-a27b-692b9ba8c14a',
            new DateTimeImmutable()
        );
    }

    /**
     * @inheritDoc
     */
    public function isEmailUnique(?string $email): bool
    {
        return !in_array($email, ["used@email.com"]);
    }

    /**
     * @inheritDoc
     */
    public function isPseudoUnique(?string $pseudo): bool
    {
        return !in_array($pseudo, ["used_pseudo"]);
    }

    /**
     * @inheritDoc
     */
    public function register(User $user): void
    {
    }

    public function update(User $user): void
    {
    }
}
