<?php

namespace TYannis\SDS\Domain\Security\Request\User;

use Assert\Assert;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Assert\Assertion;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

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
     * @var string|null
     */
    private ?string $email;
    /**
     * @var string|null
     */
    private ?string $pseudo;
    /**
     * @var bool|null
     */
    private ?bool $newsletter;
    /**
     * @var array|null
     */
    private ?array $roles;

    /**
     * @param  User  $user
     * @param  string|null  $email
     * @param  string|null  $pseudo
     * @param  bool|null  $newsletter
     * @param  array|null  $roles
     * @return static
     */
    public static function create(User $user, ?string $email, ?string $pseudo, ?bool $newsletter, ?array $roles): self
    {
        return new self($user, $email, $pseudo, $newsletter, $roles);
    }

    /**
     * UpdateRequest constructor.
     * @param  User  $user
     * @param  string|null  $email
     * @param  string|null  $pseudo
     * @param  bool|null  $newsletter
     * @param  array|null  $roles
     */
    public function __construct(User $user, ?string $email, ?string $pseudo, ?bool $newsletter, ?array $roles)
    {
        $this->user = $user;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->newsletter = $newsletter;
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
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @return bool|null
     */
    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    /**
     * @return array|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param  UserGateway  $userGateway
     * @throws AssertionFailedException
     */
    public function validate(UserGateway $userGateway)
    {
        Assertion::nullOrNotBlank($this->email);
        Assertion::nullOrNotBlank($this->pseudo);

        Assertion::nullOrNotBlank($this->newsletter);

        if ($this->newsletter !== null) {
            Assertion::boolean($this->newsletter);
        }

        if ($this->email !== null) {
            Assertion::nonUniqueEmail($this->email, $userGateway);
        }
        if ($this->pseudo !== null) {
            Assertion::nonUniquePseudo($this->pseudo, $userGateway);
        }

        if ($this->roles !== null) {
            foreach ($this->roles as $role) {
                Assertion::notBlank($role);
            }
        }
    }
}
