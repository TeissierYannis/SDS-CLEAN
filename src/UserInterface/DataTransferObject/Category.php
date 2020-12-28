<?php

namespace App\UserInterface\DataTransferObject;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Category as DomainCategory;

/**
 * Class Category
 * @package App\UserInterface\DataTransferObject
 */
class Category
{
    /**
     * @var UuidInterface
     */
    private UuidInterface $id;

    /**
     * @var string|null
     */
    private $title;

    public static function fromDomainCategory(DomainCategory $category): self
    {
        return new self($category->getId(), $category->getTitle());
    }

    /**
     * @param string $title
     * @return static
     */
    public static function create(string $title): self
    {
        return new self(Uuid::uuid4(), $title);
    }

    /**
     * Category constructor.
     * @param UuidInterface $id
     * @param string|null $title
     */
    public function __construct(UuidInterface $id, ?string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param UuidInterface $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
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
