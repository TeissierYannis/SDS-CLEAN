<?php

namespace TYannis\SDS\Domain\Security\Request;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class RecoverPasswordRequest
 * @package TYannis\SDS\Domain\Security\Request
 */
class RecoverPasswordRequest
{
    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $newPlainPassword;

    /**
     * @var string
     */
    private string $token;

    /**
     * RecoverPasswordRequest constructor.
     * @param string $email
     * @param string $newPlainPassword
     * @param string $token
     */
    public function __construct(string $email, string $newPlainPassword, string $token)
    {
        $this->email = $email;
        $this->newPlainPassword = $newPlainPassword;
        $this->token = $token;
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
    public function getNewPlainPassword(): string
    {
        return $this->newPlainPassword;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->email);
        Assertion::email($this->email);
        Assertion::notBlank($this->token);
        Assertion::notBlank($this->newPlainPassword);
        Assertion::minLength($this->newPlainPassword, 8);
    }
}
