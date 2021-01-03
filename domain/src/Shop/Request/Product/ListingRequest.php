<?php

namespace TYannis\SDS\Domain\Shop\Request\Product;

use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class ListingRequest
 * @package TYannis\SDS\Domain\Blog\Request\Article
 */
class ListingRequest
{
    /**
     * @var int
     */
    private int $page;

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
     * ListingRequest constructor.
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     */
    public function __construct(int $page, int $limit, string $field, string $order)
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
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

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::min($this->page, 1);
        Assertion::inArray($this->limit, [10, 25, 50, 100]);
        Assertion::inArray($this->field, ['name', 'price']);
        Assertion::inArray($this->order, ['asc', 'desc']);
    }
}
