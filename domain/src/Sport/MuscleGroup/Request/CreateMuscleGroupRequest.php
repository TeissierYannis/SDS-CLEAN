<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Request;

/**
 * Class CreateMuscleGroupRequest
 * @package TYannis\SDS\Domain\Sport\Request
 */
class CreateMuscleGroupRequest
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     * @return static
     */
    public static function create(string $name): self
    {
        return new self($name);
    }

    /**
     * CreateMuscleGroupRequest constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
