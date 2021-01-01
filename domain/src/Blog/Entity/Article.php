<?php

namespace TYannis\SDS\Domain\Blog\Entity;

use DateTimeInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;
use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class Article
 * @package TYannis\SDS\Domain\Blog\Entity
 */
class Article
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
     * Article constructor.
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
     * @param  CreateRequest  $createRequest
     * @return static
     */
    public static function fromCreate(CreateRequest $createRequest): self
    {
        return new self(
            Uuid::uuid4(),
            $createRequest->getTitle(),
            $createRequest->getContent(),
            $createRequest->getCategory(),
            $createRequest->getCreatedAt(),
            $createRequest->getRedactor()
        );
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
     * @param  string  $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param  string  $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param  Category  $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
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
