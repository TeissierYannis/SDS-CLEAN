<?php

namespace TYannis\SDS\Domain\Blog\Gateway;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Interface ArticleGateway
 * @package TYannis\SDS\Domain\Blog\Gateway
 */
interface ArticleGateway
{
    /**
     * @param Article $article
     */
    public function create(Article $article): void;

    /**
     * @param Article $article
     */
    public function update(Article $article): void;

    /**
     * @param UuidInterface $id
     * @return Article|null
     */
    public function getArticleById(UuidInterface $id): ?Article;

    /**
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     * @return Article[]
     */
    public function getArticles(int $page, int $limit, string $field, string $order): array;

    /**
     * @return int
     */
    public function countArticles(): int;
}
