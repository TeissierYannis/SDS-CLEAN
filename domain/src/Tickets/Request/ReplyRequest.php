<?php

namespace TYannis\SDS\Domain\Tickets\Request;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;

/**
 * Class ReplyRequest
 * @package TYannis\SDS\Domain\Tickets\Request
 */
class ReplyRequest
{
    /**
     * @var Ticket
     */
    private Ticket $ticket;
    /**
     * @var string
     */
    private string $pseudo;
    /**
     * @var string
     */
    private string $message;

    /**
     * ReplyRequest constructor.
     * @param  Ticket  $ticket
     * @param  string  $pseudo
     * @param  string  $message
     */
    public function __construct(Ticket $ticket, string $pseudo, string $message)
    {
        $this->ticket = $ticket;
        $this->pseudo = $pseudo;
        $this->message = $message;
    }

    /**
     * @return Ticket
     */
    public function getTicket(): Ticket
    {
        return $this->ticket;
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
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->pseudo);
        Assertion::notBlank($this->message);
    }
}
