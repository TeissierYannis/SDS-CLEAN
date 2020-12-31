<?php

namespace TYannis\SDS\Domain\Security\Request;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;

/**
 * Class LoginRequest
 *
 * @package TYannis\SDS\Domain\Security\Request
 */
class LoginRequest
{
    /**
     * @var string
     */
    private string $email;
    /**
     * @var string
     */
    private string $password;

    public static function create(string $email, string $password): self
    {
        return new self($email, $password);
    }

    /**
     * LoginRequest constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->email, "This email should not be blank.");
        Assertion::notBlank($this->password, "This password should not be blank.");
    }
}
