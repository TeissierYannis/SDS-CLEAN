<?php

namespace App\UserInterface\ViewModel\Article;

use App\UserInterface\DataTransferObject\Article;
use TYannis\SDS\Domain\Blog\Entity\Article as DomainArticle;
use TYannis\SDS\Domain\Blog\Response\Article\ListingResponse;

class ListingViewModel
{
    /**
     * @var Article[]
     */
    private array $articles;

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
                fn (DomainArticle $article) => Article::fromDomainArticle($article),
                $response->getArticles()
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
     * @param Article[] $articles
     * @param int $currentPage
     * @param int $pages
     * @param int $limit
     * @param string $field
     * @param string $order
     */
    public function __construct(
        array $articles,
        int $currentPage,
        int $pages,
        int $limit,
        string $field,
        string $order
    ) {
        $this->articles = $articles;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @return Article[]
     */
    public function getArticles(): array
    {
        return $this->articles;
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
