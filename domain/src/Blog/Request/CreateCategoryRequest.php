<?php

namespace TYannis\SDS\Domain\Blog\Request;

use Assert\Assert;
use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class CreateCategoryRequest
 * @package TYannis\SDS\Domain\Blog\Request
 */
class CreateCategoryRequest
{
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
        return new self($title);
    }

    /**
     * CreateCategoryRequest constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
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
