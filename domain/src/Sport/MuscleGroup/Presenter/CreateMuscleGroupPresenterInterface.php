<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Presenter;

use TYannis\SDS\Domain\Sport\MuscleGroup\Response\CreateMuscleGroupResponse;

/**
 * Interface CreateMuscleGroupPresenterInterface
 * @package TYannis\SDS\Domain\Sport\Presenter
 */
interface CreateMuscleGroupPresenterInterface
{
    /**
     * @param CreateMuscleGroupResponse $response
     */
    public function present(CreateMuscleGroupResponse $response): void;
}
