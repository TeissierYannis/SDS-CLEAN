<?php

namespace TYannis\SDS\Domain\Tickets\Provider;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;

interface MailProviderInterface
{
    /**
     * @param  string  $pseudo
     * @param  string  $body
     * @param  Ticket  $ticket
     */
    public function replyToTicket(string $pseudo, string $body, Ticket $ticket): void;
}
