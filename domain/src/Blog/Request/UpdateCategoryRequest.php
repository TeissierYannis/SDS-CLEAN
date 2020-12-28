<?php

namespace TYannis\SDS\Domain\Blog\Request;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Ramsey\Uuid\UuidInterface;

/**
 * Class UpdateCategoryRequest
 * @package TYannis\SDS\Domain\Blog\Request
 */
class UpdateCategoryRequest
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
     * @param UuidInterface $id
     * @param string $title
     * @return static
     */
    public static function create(UuidInterface $id, string $title): self
    {
        return new self($id, $title);
    }

    /**
     * UpdateCategoryRequest constructor.
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
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->title);
        Assertion::minLength($this->title, 3);
    }
}
