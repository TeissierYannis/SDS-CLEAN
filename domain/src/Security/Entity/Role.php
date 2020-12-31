<?php

namespace TYannis\SDS\Domain\Security\Entity;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Request\Role\CreateRequest;

/**
 * Class Role
 * @package TYannis\SDS\Domain\UserManagement\Entity
 */
class Role
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
     * @param  CreateRequest  $createRequest
     * @return static
     */
    public static function fromCreate(CreateRequest $createRequest): self
    {
        return new self(
            Uuid::uuid4(),
            $createRequest->getName()
        );
    }

    /**
     * @param  string  $name
     * @return static
     */
    public static function create(string $name): self
    {
        return new self(Uuid::uuid4(), $name);
    }

    /**
     * Role constructor.
     * @param  UuidInterface  $id
     * @param  string  $name
     */
    public function __construct(UuidInterface $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
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
}
