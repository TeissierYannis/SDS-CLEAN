<?php

namespace App\Infrastructure\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Class DoctrineProduct
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity(repositoryClass="App\Infrastructure\Adapter\Repository\ProductRepository")
 */
class DoctrineProduct
{
    /**
     * @var UuidInterface
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private UuidInterface $id;

    /**
     * @var string
     * @ORM\Column
     */
    private string $name;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $description;

    /**
     * @var float
     * @ORM\Column
     */
    private float $price;

    /**
     * @var string
     * @ORM\Column
     */
    private string $image;

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param  UuidInterface  $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param  float  $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param  string  $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
