<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

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
}
