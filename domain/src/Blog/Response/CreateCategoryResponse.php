<?php

namespace TYannis\SDS\Domain\Blog\Response;

use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class CreateCategoryResponse
 * @package TYannis\SDS\Domain\Blog\Response
 */
class CreateCategoryResponse
{
    /**
     * @var Category
     */
    private Category $category;

    /**
     * CreateCategoryResponse constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }
}
