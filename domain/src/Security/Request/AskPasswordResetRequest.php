<?php

namespace TYannis\SDS\Domain\Security\Request;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class AskPasswordResetRequest
 * @package TYannis\SDS\Domain\Security\Request
 */
class AskPasswordResetRequest
{
    /**
     * @var string
     */
    private string $email;

    /**
     * AskPasswordResetRequest constructor.
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public static function create(string $email): self
    {
        return new self($email);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->email);
        Assertion::email($this->email);
    }
}
