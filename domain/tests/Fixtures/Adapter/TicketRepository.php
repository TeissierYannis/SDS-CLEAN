<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;

/**
 * Class ArticleRepository
 * @package TYannis\SDS\Domain\Tests\Fixtures\Adapter
 */
class TicketRepository implements TicketGateway
{
    /**
     * @inheritDoc
     */
    public function create(Ticket $ticket): void
    {
    }

    public function updateState(Ticket $ticket): void
    {
    }
}
