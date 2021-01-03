<?php

namespace App\UserInterface\DataTransferObject;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Shop\Entity\Product as DomainProduct;

/**
 * Class Article
 * @package App\UserInterface\DataTransferObject
 */
class Product
{
    /**
     * @var UuidInterface|null
     */
    private ?UuidInterface $id;

    /**
     * @var string|null
     */
    private ?string $name = null;
    /**
     * @var string|null
     */
    private ?string $description = null;
    /**
     * @var float|null
     */
    private ?float $price = null;

    /**
     * @var string|null
     */
    private ?string $image = null;

    /**
     * @param  DomainProduct  $product
     * @return static
     */
    public static function fromDomainArticle(DomainProduct $product): self
    {
        $newProduct = new self();
        $newProduct->setId($product->getId());
        $newProduct->setName($product->getName());
        $newProduct->setDescription($product->getDescription());
        $newProduct->setPrice($product->getPrice());
        $newProduct->setImage($product->getImage());

        return $newProduct;
    }

    /**
     * @return UuidInterface|null
     */
    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    /**
     * @param  UuidInterface|null  $id
     */
    public function setId(?UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param  string|null  $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param  string|null  $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param  float|null  $price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param  string|null  $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}
