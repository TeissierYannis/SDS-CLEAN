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
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return array
     */
    public function getTickets(int $page, int $limit, string $field, string $order): array;

    /**
     * @return int
     */
    public function countTickets(): int;

    /**
     * @param  Ticket  $ticket
     */
    public function create(Ticket $ticket): void;

    /**
     * @param  Ticket  $ticket
     */
    public function updateState(Ticket $ticket): void;
}
