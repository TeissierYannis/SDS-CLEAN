<?php

namespace TYannis\SDS\Domain\Tickets\Response;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;

/**
 * Class CreateResponse
 * @package TYannis\SDS\Domain\Tickets\Response
 */
class CreateResponse
{
    /**
     * @var Ticket
     */
    private Ticket $ticket;

    /**
     * CreateResponse constructor.
     * @param  Ticket  $ticket
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * @return Ticket
     */
    public function getTicket(): Ticket
    {
        return $this->ticket;
    }
}
