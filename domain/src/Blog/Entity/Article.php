<?php

namespace TYannis\SDS\Domain\Blog\Entity;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;

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
     * @param CreateRequest $createRequest
     * @return static
     */
    public static function fromCreate(CreateRequest $createRequest): self
    {
        return new self(
            Uuid::uuid4(),
            $createRequest->getTitle(),
            $createRequest->getContent(),
            $createRequest->getCategory()
        );
    }

    /**
     * Article constructor.
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
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }
}
