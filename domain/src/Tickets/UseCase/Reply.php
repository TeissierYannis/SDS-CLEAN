<?php

namespace TYannis\SDS\Domain\Tickets\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;
use TYannis\SDS\Domain\Tickets\Presenter\ReplyPresenterInterface;
use TYannis\SDS\Domain\Tickets\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Tickets\Request\ReplyRequest;
use TYannis\SDS\Domain\Tickets\Response\ReplyResponse;

/**
 * Class Reply
 * @package TYannis\SDS\Domain\Tickets\UseCase
 */
class Reply
{
    /**
     * @var TicketGateway
     */
    private TicketGateway $ticketGateway;

    /**
     * @var MailProviderInterface
     */
    private MailProviderInterface $mailer;

    /**
     * Reply constructor.
     * @param  TicketGateway  $ticketGateway
     * @param  MailProviderInterface  $mailer
     */
    public function __construct(TicketGateway $ticketGateway, MailProviderInterface $mailer)
    {
        $this->ticketGateway = $ticketGateway;
        $this->mailer = $mailer;
    }

    /**
     * @param  ReplyRequest  $request
     * @param  ReplyPresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(ReplyRequest $request, ReplyPresenterInterface $presenter)
    {
        $request->validate();

        $ticket = new Ticket(
            $request->getTicket()->getId(),
            $request->getTicket()->getEmail(),
            $request->getTicket()->getMessage(),
            $request->getTicket()->getSendedAt(),
            'RESOLVED'
        );

        $this->mailer->replyToTicket($request->getPseudo(), $request->getMessage(), $ticket);

        $this->ticketGateway->updateState($ticket);

        $presenter->present(new ReplyResponse($ticket, $request->getPseudo(), $request->getMessage()));
    }
}
