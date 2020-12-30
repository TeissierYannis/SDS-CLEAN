<?php

namespace TYannis\SDS\Domain\Security\Entity;

use DateTimeImmutable;
use DateTimeInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Request\RecoverPasswordRequest;
use TYannis\SDS\Domain\Security\Request\RegistrationRequest;

/**
 * Class User
 *
 * @package TYannis\SDS\Domain\Security\Entity
 */
class User
{
    /**
     * @var UuidInterface
     */
    private UuidInterface $id;

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
    private string $password;

    /**
     * @var bool
     */
    private bool $isNewsletterRegistered;

    /**
     * @var string
     */
    private string $role = 'ROLE_USER';

    /**
     * @var string|null
     */
    private ?string $passwordResetToken = null;

    /**
     * @var DateTimeInterface|null
     */
    private ?DateTimeInterface $passwordResetRequestedAt = null;

    /**
     * User constructor.
     *
     * @param  UuidInterface  $id
     * @param  string  $email
     * @param  string  $pseudo
     * @param  string  $password
     * @param  bool  $isNewsletterRegistered
     * @param  string  $role
     * @param  string|null  $passwordResetToken
     * @param  DateTimeInterface|null  $passwordResetRequestedAt
     */
    public function __construct(
        UuidInterface $id,
        string $email,
        string $pseudo,
        string $password,
        bool $isNewsletterRegistered,
        ?string $passwordResetToken = null,
        ?DateTimeInterface $passwordResetRequestedAt = null,
        string $role = 'ROLE_USER'
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->isNewsletterRegistered = $isNewsletterRegistered;
        $this->passwordResetToken = $passwordResetToken;
        $this->passwordResetRequestedAt = $passwordResetRequestedAt;
        $this->role = $role;
    }

    /**
     * @param  RegistrationRequest  $request
     * @return static
     */
    public static function fromRegistration(RegistrationRequest $request): self
    {
        return new self(
            Uuid::uuid4(),
            $request->getEmail(),
            $request->getPseudo(),
            password_hash($request->getPlainPassword(), PASSWORD_ARGON2I),
            $request->getIsNewsletterRegistered()
        );
    }

    /**
     * @param  User  $user
     * @param  RecoverPasswordRequest  $request
     */
    public static function resetPassword(self $user, RecoverPasswordRequest $request): void
    {
        $password = password_hash($request->getNewPlainPassword(), PASSWORD_ARGON2I);

        if ($password) {
            $user->password = $password;
        }

        $user->passwordResetToken = null;
        $user->passwordResetRequestedAt = null;
    }

    /**
     * @param  User  $user
     * @param  string  $token
     */
    public static function requestPasswordReset(self $user, string $token): void
    {
        $user->passwordResetToken = $token;
        $user->passwordResetRequestedAt = new DateTimeImmutable();
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return bool
     */
    public function getIsNewsletterRegistered(): bool
    {
        return $this->isNewsletterRegistered;
    }

    /**
     * @return string|null
     */
    public function getPasswordResetToken(): ?string
    {
        return $this->passwordResetToken;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPasswordResetRequestedAt(): ?DateTimeInterface
    {
        return $this->passwordResetRequestedAt;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param  string  $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}
