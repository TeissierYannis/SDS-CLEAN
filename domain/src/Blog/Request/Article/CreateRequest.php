<?php

namespace TYannis\SDS\Domain\Blog\Request\Article;

use Assert\Assertion;
use Assert\AssertionFailedException;
use DateTimeInterface;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Security\Entity\User;

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
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;

    /**
     * @var User
     */
    private User $redactor;

    /**
     * CreateRequest constructor.
     * @param  string  $title
     * @param  string  $content
     * @param  Category  $category
     * @param  DateTimeInterface  $createdAt
     * @param  User  $redactor
     */
    public function __construct(
        string $title,
        string $content,
        Category $category,
        DateTimeInterface $createdAt,
        User $redactor
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
        $this->createdAt = $createdAt;
        $this->redactor = $redactor;
    }

    /**
     * @param  string  $title
     * @param  string  $content
     * @param  Category  $category
     * @param  DateTimeInterface  $createdAt
     * @param  User  $redactor
     * @return static
     */
    public static function create(
        string $title,
        string $content,
        Category $category,
        DateTimeInterface $createdAt,
        User $redactor
    ): self {
        return new self($title, $content, $category, $createdAt, $redactor);
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
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return User
     */
    public function getRedactor(): User
    {
        return $this->redactor;
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
