<?php

namespace App\Infrastructure\Test\Adapter;

use TYannis\SDS\Domain\Security\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Provider\MailProviderInterface as TicketMailProvider;

class MailProvider implements MailProviderInterface, TicketMailProvider
{
    public function sendPasswordResetLink(string $email, string $pseudo, string $link): void
    {
    }

    public function replyToTicket(string $pseudo, string $body, Ticket $ticket): void
    {
    }
}
