<?php

namespace App\UserInterface\ViewModel\Category;

use App\UserInterface\DataTransferObject\Article;
use App\UserInterface\DataTransferObject\Category;
use TYannis\SDS\Domain\Blog\Entity\Category as DomainCategory;
use TYannis\SDS\Domain\Blog\Response\Category\ListingResponse;

class ListingViewModel
{
    /**
     * @var Category[]
     */
    private array $categories;

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
     * @param ListingResponse $response
     * @return static
     */
    public static function fromResponse(ListingResponse $response): self
    {
        return new self(
            array_map(
                fn (DomainCategory $category) => Category::fromDomainCategory($category),
                $response->getCategories()
            ),
            $response->getCurrentPage(),
            $response->getPages(),
            $response->getLimit(),
            $response->getField(),
            $response->getOrder()
        );
    }

    /**
     * ListingViewModel constructor.
     * @param Article[] $categories
     * @param int $currentPage
     * @param int $pages
     * @param int $limit
     * @param string $field
     * @param string $order
     */
    public function __construct(
        array $categories,
        int $currentPage,
        int $pages,
        int $limit,
        string $field,
        string $order
    ) {
        $this->categories = $categories;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
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
