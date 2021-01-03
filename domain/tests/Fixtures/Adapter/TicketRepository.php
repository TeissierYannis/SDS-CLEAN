<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\Uuid;
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

    public function getTickets(int $page, int $limit, string $field, string $order): array
    {
        $tickets = array_fill(
            0,
            25,
            new Ticket(
                Uuid::uuid4(),
                'email@email.com',
                'message',
                new \DateTime(),
                'PENDING'
            )
        );
        return array_slice($tickets, ($page - 1) * $limit, $limit);
    }

    public function countTickets(): int
    {
        return 25;
    }
}
