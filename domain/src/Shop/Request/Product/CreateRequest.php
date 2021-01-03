<?php

namespace TYannis\SDS\Domain\Shop\Request\Product;

use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class CreateRequest
 * @package TYannis\SDS\Domain\Shop\Request\Product
 */
class CreateRequest
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var float
     */
    private float $price;
    /**
     * @var string
     */
    private string $image;

    /**
     * @param  string  $name
     * @param  string  $description
     * @param  float  $price
     * @param  string  $image
     * @return static
     */
    public static function create(string $name, string $description, float $price, string $image): self
    {
        return new self($name, $description, $price, $image);
    }

    /**
     * CreateRequest constructor.
     * @param  string  $name
     * @param  string  $description
     * @param  float  $price
     * @param  string  $image
     */
    public function __construct(string $name, string $description, float $price, string $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->name);
        Assertion::minLength($this->name, 3);

        Assertion::notBlank($this->description);
        Assertion::minLength($this->description, 3);

        Assertion::notBlank($this->price);

        Assertion::notBlank($this->image);
    }
}
