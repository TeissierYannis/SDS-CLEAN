<?php

namespace TYannis\SDS\Domain\Blog\Gateway;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Interface CategoryGateway
 * @package TYannis\SDS\Domain\Blog\Gateway
 */
interface CategoryGateway
{
    /**
     * @param Category $category
     */
    public function create(Category $category): void;

    /**
     * @param Category $category
     */
    public function update(Category $category): void;

    /**
     * @param UuidInterface $id
     * @return Category|null
     */
    public function getCategoryById(UuidInterface $id): ?Category;

    /**
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     * @return Category[]
     */
    public function getCategories(int $page, int $limit, string $field, string $order): array;

    /**
     * @return int
     */
    public function countCategories(): int;
}
