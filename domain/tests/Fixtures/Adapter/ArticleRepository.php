<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\Uuid;
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

    /**
     * @param int $page
     * @param int $limit
     * @return Article[]
     */
    public function getArticles(int $page, int $limit, string $field, string $order): array
    {
        $articles = array_fill(
            0,
            25,
            new Article(
                Uuid::uuid4(),
                'Title',
                'Content',
                new Category(Uuid::uuid4(), 'Category')
            )
        );

        return array_slice($articles, ($page - 1) * $limit, $limit);
    }

    /**
     * @return int
     */
    public function countArticles(): int
    {
        return 25;
    }
}
