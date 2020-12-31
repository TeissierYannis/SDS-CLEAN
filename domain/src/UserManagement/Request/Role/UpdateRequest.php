<?php

namespace TYannis\SDS\Domain\UserManagement\Request\Role;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class UpdateRequest
 * @package TYannis\SDS\Domain\UserManagement\Request
 */
class UpdateRequest
{
    /**
     * @var User
     */
    private User $user;

    /**
     * @var string
     */
    private string $role;

    /**
     * UpdateRequest constructor.
     * @param  User  $user
     * @param  string  $role
     */
    public function __construct(User $user, string $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    /**
     * @param  User  $user
     * @param  string  $role
     * @return static
     */
    public static function create(User $user, string $role): self
    {
        return new self($user, $role);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param  array  $roles
     * @throws AssertionFailedException
     */
    public function validate(array $roles)
    {
        Assertion::inArray($this->role, $roles);
    }
}
