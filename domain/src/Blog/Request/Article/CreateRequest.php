<?php

namespace TYannis\SDS\Domain\Blog\Request\Article;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\Blog\Request\Article
 */
class CreateRequest
{
    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $content;

    /**
     * @var Category
     */
    private Category $category;

    /**
     * @param string $title
     * @param string $content
     * @param Category $category
     * @return static
     */
    public static function create(string $title, string $content, Category $category): self
    {
        return new self($title, $content, $category);
    }

    /**
     * CreateRequest constructor.
     * @param string $title
     * @param string $content
     * @param Category $category
     */
    public function __construct(string $title, string $content, Category $category)
    {
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->title);
        Assertion::minLength($this->title, 3);

        Assertion::notBlank($this->content);
        Assertion::minLength($this->content, 3);

        Assertion::notBlank($this->category->getTitle());
        Assertion::minLength($this->category->getTitle(), 3);
    }
}
