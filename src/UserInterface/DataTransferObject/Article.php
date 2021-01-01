<?php

namespace App\UserInterface\DataTransferObject;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article as DomainArticle;

/**
 * Class Article
 * @package App\UserInterface\DataTransferObject
 */
class Article
{
    /**
     * @var UuidInterface|null
     */
    private ?UuidInterface $id;

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
     * @var ?DateTimeInterface
     */
    private ?DateTimeInterface $createdAt = null;

    /**
     * @var ?User
     */
    private ?User $redactor = null;

    /**
     * @param DomainArticle $article
     * @return static
     */
    public static function fromDomainArticle(DomainArticle $article): self
    {
        $newArticle = new self();
        $newArticle->setId($article->getId());
        $newArticle->setTitle($article->getTitle());
        $newArticle->setContent($article->getContent());
        $newArticle->setCategory(new Category($article->getCategory()->getId(), $article->getCategory()->getTitle()));
        $newArticle->setCreatedAt($article->getCreatedAt());
        $newArticle->setRedactor(User::fromDomainUser($article->getRedactor()));

        return $newArticle;
    }

    /**
     * @return UuidInterface|null
     */
    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    /**
     * @param UuidInterface|null $id
     */
    public function setId(?UuidInterface $id): void
    {
        $this->id = $id;
    }

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

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param  DateTimeInterface  $createdAt
     */
    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return User
     */
    public function getRedactor(): User
    {
        return $this->redactor;
    }

    /**
     * @param  User  $redactor
     */
    public function setRedactor(User $redactor): void
    {
        $this->redactor = $redactor;
    }
}
