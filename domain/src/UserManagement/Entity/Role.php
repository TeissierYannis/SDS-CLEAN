<?php


namespace TYannis\SDS\Domain\UserManagement\Entity;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\UserManagement\Request\CreateRoleRequest;

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
     * @param  CreateRoleRequest  $createRequest
     * @return static
     */
    public static function fromCreate(CreateRoleRequest $createRequest): self
    {
        return new self(
            Uuid::uuid4(),
            $createRequest->getName()
        );
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