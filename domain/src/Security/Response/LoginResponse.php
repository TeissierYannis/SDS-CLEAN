<?php

namespace TYannis\SDS\Domain\Security\Response;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class LoginResponse
 *
 * @package TYannis\SDS\Domain\Security\Response
 */
class LoginResponse
{
    /**
     * @var User|null
     */
    private ?User $user;

    /**
     * @var bool
     */
    private bool $passwordValid;

    /**
     * LoginResponse constructor.
     * @param User|null $user
     * @param bool $passwordValid
     */
    public function __construct(?User $user, bool $passwordValid)
    {
        $this->user = $user;
        $this->passwordValid = $passwordValid;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return bool
     */
    public function isPasswordValid(): bool
    {
        return $this->passwordValid;
    }
}
