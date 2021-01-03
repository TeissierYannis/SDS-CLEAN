<?php

namespace App\Infrastructure\Doctrine\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Class DoctrineTicket
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity(repositoryClass="App\Infrastructure\Adapter\Repository\TicketRepository")
 */
class DoctrineTicket
{
    /**
     * @var UuidInterface
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private UuidInterface $id;

    /**
     * @var string
     * @ORM\Column
     */
    private string $email;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $message;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $sendedAt;

    /**
     * @var string
     * @ORM\Column
     */
    private string $state;

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param  UuidInterface  $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param  string  $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return DateTimeInterface
     */
    public function getSendedAt(): DateTimeInterface
    {
        return $this->sendedAt;
    }

    /**
     * @param  DateTimeInterface  $sendedAt
     */
    public function setSendedAt(DateTimeInterface $sendedAt): void
    {
        $this->sendedAt = $sendedAt;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param  string  $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }
}
