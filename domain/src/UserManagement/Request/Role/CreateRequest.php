<?php

namespace TYannis\SDS\Domain\UserManagement\Request\Role;

use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\UserManagement\Request
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
     * @throws AssertionFailedException
     */
    public function validate(array $roles): void
    {
        Assertion::notBlank($this->name);
        Assertion::minLength($this->name, 3);
        Assertion::inArray($this->name, $roles);
    }
}
