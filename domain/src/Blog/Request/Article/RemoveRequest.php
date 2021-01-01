<?php

namespace TYannis\SDS\Domain\Blog\Request\Article;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class RemoveRequest
 * @package TYannis\SDS\Domain\Blog\Request
 */
class RemoveRequest
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
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;

    /**
     * @var User
     */
    private User $redactor;

    /**
     * RemoveRequest constructor.
     * @param  UuidInterface  $id
     * @param  string  $title
     * @param  string  $content
     * @param  Category  $category
     * @param  DateTimeInterface  $createdAt
     * @param  User  $redactor
     */
    public function __construct(
        UuidInterface $id,
        string $title,
        string $content,
        Category $category,
        DateTimeInterface $createdAt,
        User $redactor
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
        $this->createdAt = $createdAt;
        $this->redactor = $redactor;
    }

    /**
     * @param  UuidInterface  $id
     * @param  string  $title
     * @param  string  $content
     * @param  Category  $category
     * @param  DateTimeInterface  $createdAt
     * @param  User  $redactor
     * @return RemoveRequest
     */
    public static function create(
        UuidInterface $id,
        string $title,
        string $content,
        Category $category,
        DateTimeInterface $createdAt,
        User $redactor
    ): self {
        return new self($id, $title, $content, $category, $createdAt, $redactor);
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
}
