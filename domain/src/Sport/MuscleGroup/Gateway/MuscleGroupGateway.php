<?php


namespace TYannis\SDS\Domain\Sport\MuscleGroup\Gateway;

use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;

/**
 * Class MuscleGroupGateway
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\Gateway
 */
interface MuscleGroupGateway
{
    /**
     * @param MuscleGroup $muscleGroup
     */
    public function create(MuscleGroup $muscleGroup): void;
}