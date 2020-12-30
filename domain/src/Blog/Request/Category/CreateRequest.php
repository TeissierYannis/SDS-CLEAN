<?php

namespace TYannis\SDS\Domain\Blog\Request\Category;

use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\Blog\Request
 */
class CreateRequest
{
    /**
     * @var string
     */
    private string $title;

    /**
     * CreateRequest constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $title
     * @return static
     */
    public static function create(string $title): self
    {
        return new self($title);
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
