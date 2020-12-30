<?php

namespace TYannis\SDS\Domain\Blog\Response\Category;

use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class CreateResponse
 * @package TYannis\SDS\Domain\Blog\Response\Category
 */
class CreateResponse
{
    /**
     * @var Category
     */
    private Category $category;

    /**
     * CreateResponse constructor.
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
