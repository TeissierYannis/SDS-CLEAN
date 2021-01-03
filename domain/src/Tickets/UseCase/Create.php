<?php

namespace TYannis\SDS\Domain\Tickets\UseCase;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\CreateRequest;
use TYannis\SDS\Domain\Tickets\Response\CreateResponse;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Tickets\UseCase
 */
class Create
{
    private TicketGateway $ticketGateway;

    /**
     * Create constructor.
     * @param  TicketGateway  $ticketGateway
     */
    public function __construct(TicketGateway $ticketGateway)
    {
        $this->ticketGateway = $ticketGateway;
    }

    /**
     * @param  CreateRequest  $request
     * @param  CreatePresenterInterface  $presenter
     * @throws \Assert\AssertionFailedException
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate();

        $ticket = Ticket::fromCreate($request);

        $this->ticketGateway->create($ticket);

        $presenter->present(new CreateResponse($ticket));
    }
}
