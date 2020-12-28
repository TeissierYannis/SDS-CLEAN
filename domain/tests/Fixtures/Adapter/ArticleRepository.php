<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;

/**
 * Class ArticleRepository
 * @package TYannis\SDS\Domain\Tests\Fixtures\Adapter
 */
class ArticleRepository implements ArticleGateway
{
    /**
     * @param Article $article
     */
    public function create(Article $article): void
    {
    }

    public function update(Article $article): void
    {
    }

    public function getArticleById(UuidInterface $id): ?Article
    {
        return new Article($id, 'title', 'content', Category::create('category'));
    }
}
