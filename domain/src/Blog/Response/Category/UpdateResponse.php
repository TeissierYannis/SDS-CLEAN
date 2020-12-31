<?php

namespace TYannis\SDS\Domain\Blog\Response\Category;

use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class UpdateResponse
 * @package TYannis\SDS\Domain\Blog\Response\Category
 */
class UpdateResponse
{
    /**
     * @var Category
     */
    private Category $category;

    /**
     * UpdateResponse constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}
