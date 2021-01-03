<?php

namespace TYannis\SDS\Domain\Tickets\Request;

use Assert\Assertion;
use Assert\AssertionFailedException;
use DateTimeInterface;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\Tickets\Request
 */
class CreateRequest
{
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
     * CreateRequest constructor.
     * @param  string  $email
     * @param  string  $message
     * @param  DateTimeInterface  $sendedAt
     */
    public function __construct(string $email, string $message, DateTimeInterface $sendedAt, string $state)
    {
        $this->email = $email;
        $this->message = $message;
        $this->sendedAt = $sendedAt;
        $this->state = $state;
    }

    /**
     * @param  string  $email
     * @param  string  $message
     * @param  DateTimeInterface  $sendedAt
     * @param  string  $state
     * @return static
     */
    public static function create(string $email, string $message, DateTimeInterface $sendedAt, string $state): self
    {
        return new self($email, $message, $sendedAt, $state);
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

    /**
     * @throws AssertionFailedException
     */
    public function validate()
    {
        Assertion::notBlank($this->email);
        Assertion::email($this->email);

        Assertion::notBlank($this->message);
        Assertion::minLength($this->message, 3);

        Assertion::notBlank($this->state);
        Assertion::inArray($this->state, ['PENDING', 'RESOLVED', 'ARCHIVED']);
    }
}
