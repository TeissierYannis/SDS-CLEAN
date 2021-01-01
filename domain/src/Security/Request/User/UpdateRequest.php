<?php

namespace TYannis\SDS\Domain\Security\Request\User;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class UpdateRequest
 * @package TYannis\SDS\Domain\Security\Request\User
 */
class UpdateRequest
{
    /**
     * @var User
     */
    private User $user;

    /**
     * @var array
     */
    private array $roles;

    /**
     * UpdateRequest constructor.
     * @param  User  $user
     * @param  array  $roles
     */
    public function __construct(User $user, array $roles)
    {
        $this->user = $user;
        $this->roles = $roles;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate()
    {
        foreach ($this->roles as $role) {
            Assertion::notBlank($role);
        }
    }
}
