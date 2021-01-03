<?php

namespace App\UserInterface\DataTransferObject;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tickets\Entity\Ticket as DomainTicket;

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
    private ?DateTimeInterface $sendedAt = null;

    /**
     * @var string|null
     */
    private ?string $state = null;

    /**
     * @param  DomainTicket  $ticket
     * @return static
     */
    public static function fromDomainProduct(DomainTicket $ticket): self
    {
        $newTicket = new self();
        $newTicket->setId($ticket->getId());
        $newTicket->setEmail($ticket->getEmail());
        $newTicket->setMessage($ticket->getMessage());
        $newTicket->setSendedAt($ticket->getSendedAt());
        $newTicket->setState($ticket->getState());
        return $newTicket;
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
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param  string|null  $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getSendedAt(): ?DateTimeInterface
    {
        return $this->sendedAt;
    }

    /**
     * @param  DateTimeInterface|null  $sendedAt
     */
    public function setSendedAt(?DateTimeInterface $sendedAt): void
    {
        $this->sendedAt = $sendedAt;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param  string|null  $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
