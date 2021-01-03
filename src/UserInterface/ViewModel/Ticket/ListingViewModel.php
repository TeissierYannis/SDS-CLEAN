<?php

namespace App\UserInterface\ViewModel\Ticket;

use App\UserInterface\DataTransferObject\Ticket;
use TYannis\SDS\Domain\Tickets\Entity\Ticket as DomainTicket;
use TYannis\SDS\Domain\Tickets\Response\ListingResponse;

/**
 * Class ListingViewModel
 * @package App\UserInterface\ViewModel\Ticket
 */
class ListingViewModel
{
    /**
     * @var Ticket[]
     */
    private array $tickets;

    /**
     * @var int
     */
    private int $currentPage;
    /**
     * @var int
     */
    private int $pages;
    /**
     * @var int
     */
    private int $limit;
    /**
     * @var string
     */
    private string $field;
    /**
     * @var string
     */
    private string $order;

    /**
     * ListingViewModel constructor.
     * @param  Ticket[]  $tickets
     * @param  int  $currentPage
     * @param  int  $pages
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     */
    public function __construct(
        array $tickets,
        int $currentPage,
        int $pages,
        int $limit,
        string $field,
        string $order
    ) {
        $this->tickets = $tickets;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @param  ListingResponse  $response
     * @return static
     */
    public static function fromResponse(ListingResponse $response): self
    {
        return new self(
            array_map(
                fn(DomainTicket $ticket) => Ticket::fromDomainProduct($ticket),
                $response->getTickets()
            ),
            $response->getCurrentPage(),
            $response->getPages(),
            $response->getLimit(),
            $response->getField(),
            $response->getOrder()
        );
    }

    /**
     * @return Ticket[]
     */
    public function getTickets(): array
    {
        return $this->tickets;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
}
