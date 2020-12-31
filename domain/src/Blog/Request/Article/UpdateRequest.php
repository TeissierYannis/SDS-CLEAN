<?php

namespace TYannis\SDS\Domain\Blog\Request\Article;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Category;

/**
 * Class UpdateRequest
 * @package TYannis\SDS\Domain\Blog\Request\Article
 */
class UpdateRequest
{
    /**
     * @var UuidInterface
     */
    private UuidInterface $id;

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
     * @param UuidInterface $id
     * @param string $title
     * @param string $content
     * @param Category $category
     * @return static
     */
    public static function create(UuidInterface $id, string $title, string $content, Category $category): self
    {
        return new self($id, $title, $content, $category);
    }

    /**
     * UpdateRequest constructor.
     * @param UuidInterface $id
     * @param string $title
     * @param string $content
     * @param Category $category
     */
    public function __construct(UuidInterface $id, string $title, string $content, Category $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
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
