<?php

namespace App\UserInterface\DataTransferObject;

use App\UserInterface\DataTransferObject\Category;

/**
 * Class Article
 * @package App\UserInterface\DataTransferObject
 */
class Article
{
    /**
     * @var string|null
     */
    private $title = null;
    /**
     * @var string|null
     */
    private $content = null;
    /**
     * @var Category|null
     */
    private $category = null;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category|null $category
     */
    public function setCategory(?Category $category): void
    {
        $this->category = $category;
    }
}
