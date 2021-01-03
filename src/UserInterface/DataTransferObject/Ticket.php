<?php

namespace App\UserInterface\DataTransferObject;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Ticket
 * @package App\UserInterface\DataTransferObject
 */
class Ticket
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
    private ?string $message = null;

    /**
     * @var ?DateTimeInterface
     */
    private ?DateTimeInterface $sendAt = null;

    /**
     * @var string|null
     */
    private ?string $state = null;

    /**
     * @return UuidInterface|null
     */
    public function getId(): ?UuidInterface
    {
        return $this->id;
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
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getSendAt(): ?DateTimeInterface
    {
        return $this->sendAt;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param  UuidInterface|null  $id
     */
    public function setId(?UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @param  string|null  $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param  string|null  $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param  DateTimeInterface|null  $sendAt
     */
    public function setSendAt(?DateTimeInterface $sendAt): void
    {
        $this->sendAt = $sendAt;
    }

    /**
     * @param  string|null  $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
