<?php

namespace TYannis\SDS\Domain\Security\Request\Role;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;
use TYannis\SDS\Domain\Security\Gateway\RoleGateway;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\Security\Request\Role
 */
class CreateRequest
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param  string  $name
     * @return static
     */
    public static function create(string $name): self
    {
        return new self($name);
    }

    /**
     * CreateRequest constructor.
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  array  $roles
     * @param  RoleGateway  $roleGateway
     * @throws AssertionFailedException
     */
    public function validate(RoleGateway $roleGateway): void
    {
        Assertion::notBlank($this->name);
        Assertion::minLength($this->name, 3);
        Assertion::nonUniqueRole($this->name, $roleGateway);
    }
}
