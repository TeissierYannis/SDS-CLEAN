<?php

namespace TYannis\SDS\Domain\Blog\Gateway;

use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Interface ArticleGateway
 * @package TYannis\SDS\Domain\Blog\Gateway
 */
interface CategoryGateway
{
    /**
     * @param Category $category
     */
    public function create(Category $category): void;
}
