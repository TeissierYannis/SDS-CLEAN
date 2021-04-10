<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Entity;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Sport\MuscleGroup\Request\CreateMuscleGroupRequest;

/**
 * Class MuscleGroup
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\Entity
 */
class MuscleGroup
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
     * @param CreateMuscleGroupRequest $request
     * @return static
     */
    public static function fromCreate(CreateMuscleGroupRequest $request): self
    {
        return new self(Uuid::uuid4(), $request->getName());
    }

    /**
     * MuscleGroup constructor.
     * @param UuidInterface $id
     * @param string $name
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

    /**
     * @param string $name
     * @return \TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
