<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Response;

use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;

/**
 * Class UpdateMuscleGroupResponse
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\Response
 */
class UpdateMuscleGroupResponse
{
    private MuscleGroup $muscleGroup;

    /**
     * UpdateMuscleGroupResponse constructor.
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
