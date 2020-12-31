<?php

namespace TYannis\SDS\Domain\Blog\Entity;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Category
 * @package TYannis\SDS\Domain\Blog\Entity
 */
class Category
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
     * @param string $title
     */
    public function __construct(UuidInterface $id, string $title)
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
