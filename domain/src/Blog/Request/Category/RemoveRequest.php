<?php

namespace TYannis\SDS\Domain\Blog\Request\Category;

use Ramsey\Uuid\UuidInterface;

/**
 * Class RemoveRequest
 * @package TYannis\SDS\Domain\Blog\Request\Category
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

    public static function create(UuidInterface $id, string $title): self
    {
        return new self($id, $title);
    }

    /**
     * RemoveRequest constructor.
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
}
