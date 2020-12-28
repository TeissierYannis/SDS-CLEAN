<?php

namespace App\UserInterface\DataTransferObject;

use TYannis\SDS\Domain\Blog\Entity\Category as DomainCategory;

/**
 * Class Category
 * @package App\UserInterface\DataTransferObject
 */
class Category
{
    /**
     * @var string|null
     */
    private $title;

    public static function fromDomainCategory(DomainCategory $category): self
    {
        $newCategory = new self();
        $newCategory->setTitle($category->getTitle());

        return $newCategory;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}
