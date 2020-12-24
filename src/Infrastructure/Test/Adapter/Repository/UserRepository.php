<?php

namespace App\Infrastructure\Test\Adapter\Repository;

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
}
