<?php

namespace TYannis\SDS\Domain\Tickets\Entity;

use DateTimeInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tickets\Request\CreateRequest;

/**
 * Class Ticket
 * @package TYannis\SDS\Domain\Tickets\Entity
 */
class Ticket
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
    private string $message;
    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $sendedAt;
    /**
     * @var string
     */
    private string $state;

    /**
     * Ticket constructor.
     * @param  UuidInterface  $id
     * @param  string  $email
     * @param  string  $message
     * @param  DateTimeInterface  $sendedAt
     * @param  string  $state
     */
    public function __construct(
        UuidInterface $id,
        string $email,
        string $message,
        DateTimeInterface $sendedAt,
        string $state
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->message = $message;
        $this->sendedAt = $sendedAt;
        $this->state = $state;
    }

    /**
     * @param  CreateRequest  $createRequest
     * @return static
     */
    public static function fromCreate(CreateRequest $createRequest): self
    {
        return new self(
            Uuid::uuid4(),
            $createRequest->getEmail(),
            $createRequest->getMessage(),
            $createRequest->getSendedAt(),
            $createRequest->getState()
        );
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
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return DateTimeInterface
     */
    public function getSendedAt(): DateTimeInterface
    {
        return $this->sendedAt;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}
