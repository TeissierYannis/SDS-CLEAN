<?php

namespace TYannis\SDS\Domain\Security\Request;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class RegistrationRequest
 *
 * @package TYannis\SDS\Domain\Security\Request
 */
class RegistrationRequest
{
    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $pseudo;

    /**
     * @var string
     */
    private string $plainPassword;

    /**
     * @var array
     */
    private array $roles;

    /**
     * @var bool
     */
    private bool $isNewsletterRegistered;

    /**
     * @param  string  $email
     * @param  string  $pseudo
     * @param  string  $plainPassword
     * @param  bool  $isNewsletterRegistered
     * @param  array  $roles
     * @return static
     */
    public static function create(
        string $email,
        string $pseudo,
        string $plainPassword,
        bool $isNewsletterRegistered,
        array $roles
    ): self {
        return new self($email, $pseudo, $plainPassword, $isNewsletterRegistered, $roles);
    }

    /**
     * RegistrationRequest constructor.
     *
     * @param  string  $email
     * @param  string  $pseudo
     * @param  string  $plainPassword
     * @param  bool  $isNewsletterRegistered
     * @param  array  $roles
     */
    public function __construct(
        string $email,
        string $pseudo,
        string $plainPassword,
        bool $isNewsletterRegistered,
        array $roles
    ) {
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->plainPassword = $plainPassword;
        $this->isNewsletterRegistered = $isNewsletterRegistered;
        $this->roles = $roles;
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
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @return string
     */
    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }

    /**
     * @return bool
     */
    public function getIsNewsletterRegistered(): bool
    {
        return $this->isNewsletterRegistered;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param  UserGateway  $userGateway
     *
     * @throws AssertionFailedException
     */
    public function validate(UserGateway $userGateway): void
    {
        Assertion::notBlank($this->email);
        Assertion::email($this->email);
        Assertion::nonUniqueEmail($this->email, $userGateway);
        Assertion::notBlank($this->pseudo);
        Assertion::nonUniquePseudo($this->pseudo, $userGateway);
        Assertion::notBlank($this->plainPassword);
        Assertion::minLength($this->plainPassword, 8);

        foreach ($this->roles as $role) {
            Assertion::notBlank($role);
        }
    }
}
