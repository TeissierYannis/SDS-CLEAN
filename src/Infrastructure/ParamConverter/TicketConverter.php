<?php

namespace App\Infrastructure\ParamConverter;

use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;

class TicketConverter implements ParamConverterInterface
{
    /**
     * @var TicketGateway
     */
    private TicketGateway $ticketGateway;

    /**
     * ArticleConverter constructor.
     * @param  TicketGateway  $ticketGateway
     */
    public function __construct(TicketGateway $ticketGateway)
    {
        $this->ticketGateway = $ticketGateway;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $id = $this->ticketGateway->getTicketById(Uuid::fromString($request->get('id')));

        if (is_null($id)) {
            throw new \Exception('Unknown UUID');
        }

        $request->attributes
            ->set(
                'domainTicket',
                $id
            );
    }

    /**
     * @inheritDoc
     */
    public function supports(ParamConverter $configuration)
    {
        $configuration->setIsOptional(true);
        return $configuration->getClass() === Ticket::class;
    }
}
