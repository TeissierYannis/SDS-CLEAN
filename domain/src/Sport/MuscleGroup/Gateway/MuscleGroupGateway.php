<?php


namespace TYannis\SDS\Domain\Sport\MuscleGroup\Gateway;

use Ramsey\Uuid\UuidInterface;
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

    /**
     * @param UuidInterface $id
     * @return MuscleGroup
     */
    public function getMuscleGroupById(UuidInterface $id): MuscleGroup;

    /**
     * @param MuscleGroup $muscleGroup
     * @return mixed
     */
    public function update(MuscleGroup $muscleGroup);
}