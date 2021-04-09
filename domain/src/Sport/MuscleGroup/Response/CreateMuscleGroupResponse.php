<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Response;

use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;

/**
 * Class CreateMuscleGroupResponse
 * @package TYannis\SDS\Domain\Sport\Response
 */
class CreateMuscleGroupResponse
{
    /**
     * @var MuscleGroup
     */
    private MuscleGroup $muscleGroup;

    /**
     * CreateMuscleGroupResponse constructor.
     * @param MuscleGroup $muscleGroup
     */
    public function __construct(MuscleGroup $muscleGroup)
    {
        $this->muscleGroup = $muscleGroup;
    }

    /**
     * @return MuscleGroup
     */
    public function getMuscleGroup(): MuscleGroup
    {
        return $this->muscleGroup;
    }
}
