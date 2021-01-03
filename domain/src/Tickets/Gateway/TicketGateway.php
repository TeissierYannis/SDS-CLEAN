<?php

namespace TYannis\SDS\Domain\Tickets\Gateway;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;

/**
 * Interface TicketGateway
 * @package TYannis\SDS\Domain\Tickets
 */
interface TicketGateway
{
    /**
     * @param  Ticket  $ticket
     */
    public function create(Ticket $ticket): void;

    /**
     * @param  Ticket  $ticket
     */
    public function updateState(Ticket $ticket): void;
}
