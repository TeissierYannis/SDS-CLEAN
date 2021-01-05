<?php

namespace TYannis\SDS\Domain\Tickets\UseCase;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;
use TYannis\SDS\Domain\Tickets\Request\ListingRequest;
use TYannis\SDS\Domain\Tickets\Response\ListingResponse;
use TYannis\SDS\Domain\Tickets\Presenter\ListingPresenterInterface;

/**
 * Class Listing
 * @package TYannis\SDS\Domain\Tickets\UseCase
 */
class Listing
{
    /**
     * @var TicketGateway
     */
    private TicketGateway $ticketGateway;

    /**
     * Listing constructor.
     * @param  TicketGateway  $ticketGateway
     */
    public function __construct(TicketGateway $ticketGateway)
    {
        $this->ticketGateway = $ticketGateway;
    }

    /**
     * @param  ListingRequest  $request
     * @param  ListingPresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $request->validate();

        $countProducts = $this->ticketGateway->countTickets();

        $pages = ceil($countProducts / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages === 0 ? $pages : 1);

        $presenter->present(
            new ListingResponse(
                $this->ticketGateway->getTickets(
                    $request->getPage(),
                    $request->getLimit(),
                    $request->getField(),
                    $request->getOrder()
                ),
                $request->getPage(),
                $pages,
                $request->getLimit(),
                $request->getField(),
                $request->getOrder()
            )
        );
    }
}
