<?php

namespace TYannis\SDS\Domain\Security\Gateway;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Interface UserGateway
 *
 * @package TYannis\SDS\Domain\Security\Gateway
 */
interface UserGateway
{
    /**
     * @param string $email
     *
     * @return User|null
     */
    public function getUserByEmail(string $email): ?User;

    /**
     * @param  string|null $email
     * @return bool
     */
    public function isEmailUnique(?string $email): bool;

    /**
     * @param  string|null $pseudo
     * @return bool
     */
    public function isPseudoUnique(?string $pseudo): bool;

    /**
     * @param User $user
     */
    public function register(User $user): void;
}
