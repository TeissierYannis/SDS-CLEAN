<?php

namespace TYannis\SDS\Domain\Blog\Response;

use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class UpdateCategoryResponse
 * @package TYannis\SDS\Domain\Blog\Response
 */
class UpdateCategoryResponse
{
    /**
     * @var Category
     */
    private Category $category;

    /**
     * UpdateCategoryResponse constructor.
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
