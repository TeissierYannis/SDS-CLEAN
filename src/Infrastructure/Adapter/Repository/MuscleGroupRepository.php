<?php


namespace App\Infrastructure\Adapter\Repository;


use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;
use TYannis\SDS\Domain\Sport\MuscleGroup\Gateway\MuscleGroupGateway;

class MuscleGroupRepository implements MuscleGroupGateway
{

    /**
     * @inheritDoc
     */
    public function create(MuscleGroup $muscleGroup): void
    {
    }
}