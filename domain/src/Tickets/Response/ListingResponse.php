<?php

namespace TYannis\SDS\Domain\Tickets\Response;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;

/**
 * Class ListingResponse
 * @package TYannis\SDS\Domain\Tickets\Response
 */
class ListingResponse
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
     * ListingResponse constructor.
     * @param  Ticket[]  $tickets
     * @param  int  $currentPage
     * @param  int  $pages
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     */
    public function __construct(array $tickets, int $currentPage, int $pages, int $limit, string $field, string $order)
    {
        $this->tickets = $tickets;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
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
