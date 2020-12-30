<?php

namespace App\UserInterface\DataTransferObject;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\UserManagement\Entity\Role as DomainRole;

/**
 * Class Article
 * @package App\UserInterface\DataTransferObject
 */
class Role
{
    /**
     * @var UuidInterface|null
     */
    private ?UuidInterface $id;

    /**
     * @var string|null
     */
    private $name = null;

    /**
     * @param  DomainRole  $role
     * @return static
     */
    public static function fromDomainArticle(DomainRole $role): self
    {
        $newRole = new self();
        $newRole->setId($role->getId());
        $newRole->setName($role->getName());

        return $newRole;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
