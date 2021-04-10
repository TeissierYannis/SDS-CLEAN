<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Request;

use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Assert\Assertion;

/**
 * Class UpdateMuscleGroupRequest
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\Request
 */
class UpdateMuscleGroupRequest
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
     * UpdateMuscleGroupRequest constructor.
     * @param UuidInterface $id
     * @param string $name
     */
    public function __construct(UuidInterface $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @param UuidInterface $id
     * @param string $name
     * @return static
     */
    public static function create(UuidInterface $id, string $name): self
    {
        return new self($id, $name);
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
     * @throws \Assert\AssertionFailedException
     */
    public function validate(): void
    {
        Assertion::notBlank($this->name);
        Assertion::minLength($this->name, 2);
    }
}
