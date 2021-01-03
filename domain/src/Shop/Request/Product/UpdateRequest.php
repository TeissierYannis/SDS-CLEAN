<?php

namespace TYannis\SDS\Domain\Shop\Request\Product;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Ramsey\Uuid\UuidInterface;

/**
 * Class UpdateRequest
 * @package TYannis\SDS\Domain\Shop\Request\Product
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
     * UpdateRequest constructor.
     * @param  UuidInterface  $id
     * @param  string  $name
     * @param  string  $description
     * @param  float  $price
     * @param  string  $image
     */
    public function __construct(UuidInterface $id, string $name, string $description, float $price, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * @param  UuidInterface  $id
     * @param  string  $title
     * @param  string  $content
     * @param  Category  $category
     * @return static
     */
    public static function create(
        UuidInterface $id,
        string $name,
        string $description,
        float $price,
        string $image
    ): self {
        return new self($id, $name, $description, $price, $image);
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
