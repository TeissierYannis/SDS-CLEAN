<?php

namespace App\UserInterface\ViewModel\Shop\Product;

use App\UserInterface\DataTransferObject\Article;
use App\UserInterface\DataTransferObject\Product;
use TYannis\SDS\Domain\Shop\Response\Product\ListingResponse;
use TYannis\SDS\Domain\Shop\Entity\Product as DomainProduct;

/**
 * Class ListingViewModel
 * @package App\UserInterface\ViewModel\Shop\Product
 */
class ListingViewModel
{
    /**
     * @var Product[]
     */
    private array $products;

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
                fn (DomainProduct $article) => Product::fromDomainProduct($article),
                $response->getProducts()
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
     * @param Product[] $products
     * @param int $currentPage
     * @param int $pages
     * @param int $limit
     * @param string $field
     * @param string $order
     */
    public function __construct(
        array $products,
        int $currentPage,
        int $pages,
        int $limit,
        string $field,
        string $order
    ) {
        $this->products = $products;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
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
