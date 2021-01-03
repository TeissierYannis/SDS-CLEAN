<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Gateway\TicketGateway;

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
        parent::__construct($registry, DoctrineTicket::class);
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

    /**
     * @param  Ticket  $ticket
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateState(Ticket $ticket): void
    {
        $doctrineTicket = $this->find($ticket->getId());

        self::hydrateTicket($doctrineTicket, $ticket);

        $this->_em->persist($doctrineTicket);
        $this->_em->flush();
    }

    /**
     * @param  UuidInterface  $id
     * @return Ticket|null
     */
    public function getTicketById(UuidInterface $id): ?Ticket
    {
        /** @var DoctrineTicket $doctrineTicket */
        $doctrineTicket = $this->find($id);

        if ($doctrineTicket === null) {
            return null;
        }

        return new Ticket(
            $doctrineTicket->getId(),
            $doctrineTicket->getEmail(),
            $doctrineTicket->getMessage(),
            $doctrineTicket->getSendedAt(),
            $doctrineTicket->getState()
        );
    }

    /**
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return array
     */
    public function getTickets(int $page, int $limit, string $field, string $order): array
    {
        $fields = [
            'state' => 'q.state',
        ];

        $tickets = $this->createQueryBuilder('q')
            ->orderBy($fields[$field], $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return array_map(
            function (DoctrineTicket $product) {
                return new Ticket(
                    $product->getId(),
                    $product->getEmail(),
                    $product->getMessage(),
                    $product->getSendedAt(),
                    $product->getState()
                );
            },
            $tickets
        );
    }

    /**
     * @return int
     */
    public function countTickets(): int
    {
        return $this->count([]);
    }
}
