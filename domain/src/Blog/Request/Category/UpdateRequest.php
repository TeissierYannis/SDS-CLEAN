<?php

namespace TYannis\SDS\Domain\Blog\Request\Category;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Ramsey\Uuid\UuidInterface;

/**
 * Class UpdateRequest
 * @package TYannis\SDS\Domain\Blog\Request
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
     * @param UuidInterface $id
     * @param string $title
     * @return static
     */
    public static function create(UuidInterface $id, string $title): self
    {
        return new self($id, $title);
    }

    /**
     * UpdateRequest constructor.
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
