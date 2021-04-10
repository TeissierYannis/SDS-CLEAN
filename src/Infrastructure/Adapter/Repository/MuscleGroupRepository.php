<?php


namespace App\Infrastructure\Adapter\Repository;


use Ramsey\Uuid\UuidInterface;
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

    /**
     * @param UuidInterface $id
     * @return MuscleGroup
     */
    public function getMuscleGroupById(UuidInterface $id): MuscleGroup
    {
    }

    public function update(MuscleGroup $muscleGroup)
    {
        // TODO: Implement update() method.
    }
}