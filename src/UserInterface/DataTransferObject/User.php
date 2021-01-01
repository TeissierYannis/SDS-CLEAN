<?php

namespace App\UserInterface\DataTransferObject;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Entity\User as DomainUser;

/**
 * Class User
 * @package App\UserInterface\DataTransferObject
 */
class User
{
    /**
     * @var UuidInterface|null
     */
    private ?UuidInterface $id;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var string|null
     */
    private ?string $password = null;

    /**
     * @var string|null
     */
    private ?string $pseudo = null;

    /**
     * @var array|null
     */
    private ?array $roles = null;

    /**
     * @var bool
     */
    private bool $isNewsletterRegistered = true;

    /**
     * @var string|null
     */
    private ?string $passwordResetToken = null;

    /**
     * @var DateTimeInterface|null
     */
    private ?DateTimeInterface $passwordResetRequestedAt = null;

    /**
     * @param  DomainUser  $user
     * @return User
     */
    public static function fromDomainUser(DomainUser $user): self
    {
        $newUser = new self();
        $newUser->setId($user->getId());
        $newUser->setEmail($user->getEmail());
        $newUser->setPseudo($user->getPseudo());
        $newUser->setPassword($user->getPassword());
        $newUser->setIsNewsletterRegistered($user->getIsNewsletterRegistered());
        $newUser->setPasswordResetToken($user->getPasswordResetToken());
        $newUser->setPasswordResetRequestedAt($user->getPasswordResetRequestedAt());
        $newUser->setRoles($user->getRoles());

        return $newUser;
    }

    /**
     * @return UuidInterface|null
     */
    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    /**
     * @param  UuidInterface|null  $id
     */
    public function setId(?UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param  string|null  $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param  string|null  $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @param  string|null  $pseudo
     */
    public function setPseudo(?string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return bool
     */
    public function getIsNewsletterRegistered(): bool
    {
        return $this->isNewsletterRegistered;
    }

    /**
     * @param  bool  $isNewsletterRegistered
     */
    public function setIsNewsletterRegistered(bool $isNewsletterRegistered): void
    {
        $this->isNewsletterRegistered = $isNewsletterRegistered;
    }

    /**
     * @return string|null
     */
    public function getPasswordResetToken(): ?string
    {
        return $this->passwordResetToken;
    }

    /**
     * @param  string|null  $passwordResetToken
     */
    public function setPasswordResetToken(?string $passwordResetToken): void
    {
        $this->passwordResetToken = $passwordResetToken;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPasswordResetRequestedAt(): ?DateTimeInterface
    {
        return $this->passwordResetRequestedAt;
    }

    /**
     * @param  DateTimeInterface|null  $passwordResetRequestedAt
     */
    public function setPasswordResetRequestedAt(?DateTimeInterface $passwordResetRequestedAt): void
    {
        $this->passwordResetRequestedAt = $passwordResetRequestedAt;
    }

    /**
     * @return array|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param  array|null  $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }
}
