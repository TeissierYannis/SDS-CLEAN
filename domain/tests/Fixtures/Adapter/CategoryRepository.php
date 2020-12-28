<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;

/**
 * Class ArticleRepository
 * @package TYannis\SDS\Domain\Tests\Fixtures\Adapter
 */
class CategoryRepository implements CategoryGateway
{
    /**
     * @param Category $category
     */
    public function create(Category $category): void
    {
    }

    public function update(Category $category): void
    {
    }

    public function getCategoryById(UuidInterface $id): ?Category
    {
        return new Category($id, 'My category');
    }

    public function getCategories(int $page, int $limit, string $field, string $order): array
    {
        $categories = array_fill(
            0,
            25,
            new Category(
                Uuid::uuid4(),
                'Title'
            )
        );

        return array_slice($categories, ($page - 1) * $limit, $limit);
    }

    public function countCategories(): int
    {
        return 25;
    }
}
