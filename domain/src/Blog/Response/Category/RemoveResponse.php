<?php

namespace TYannis\SDS\Domain\Blog\Response\Category;

use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class RemoveResponse
 * @package TYannis\SDS\Domain\Blog\Response\Category
 */
class RemoveResponse
{
    /**
     * @var Category|null
     */
    private ? Category $category;

    /**
     * RemoveResponse constructor.
     * @param Category|null $category
     */
    public function __construct(?Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return Category|null
     */
    public function getCategory() : ?Category
    {
        return $this->category;
    }
}
