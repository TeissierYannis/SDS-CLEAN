<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\TicketGateway;

/**
 * Class TicketRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class TicketRepository extends ServiceEntityRepository implements TicketGateway
{
    /**
     * ArticleRepository constructor.
     * @param  ManagerRegistry  $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineArticle::class);
    }

    /**
     * @inheritDoc
     */
    public function create(Ticket $ticket): void
    {
        $doctrineTicket = new DoctrineTicket();
        self::hydrateTicket($doctrineTicket, $ticket);

        $this->_em->persist($doctrineTicket);
        $this->_em->flush();
    }

    /**
     * @param  DoctrineTicket  $doctrineTicket
     * @param  Ticket  $ticket
     */
    private static function hydrateTicket(DoctrineTicket $doctrineTicket, Ticket $ticket)
    {
        $doctrineTicket->setId($ticket->getId());
        $doctrineTicket->setEmail($ticket->getEmail());
        $doctrineTicket->setMessage($ticket->getMessage());
        $doctrineTicket->setSendedAt($ticket->getSendedAt());
        $doctrineTicket->setState($ticket->getState());
    }
}
