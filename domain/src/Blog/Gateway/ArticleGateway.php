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
}
