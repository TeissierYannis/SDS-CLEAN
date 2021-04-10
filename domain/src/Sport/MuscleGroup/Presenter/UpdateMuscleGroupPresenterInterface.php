<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\Presenter;

use TYannis\SDS\Domain\Sport\MuscleGroup\Response\UpdateMuscleGroupResponse;

/**
 * Interface UpdateMuscleGroupPresenterInterface
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\Presenter
 */
interface UpdateMuscleGroupPresenterInterface
{
    /**
     * @param UpdateMuscleGroupResponse $response
     */
    public function present(UpdateMuscleGroupResponse $response): void;
}
