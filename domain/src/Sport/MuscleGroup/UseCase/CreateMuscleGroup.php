<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\UseCase;

use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;
use TYannis\SDS\Domain\Sport\MuscleGroup\Gateway\MuscleGroupGateway;
use TYannis\SDS\Domain\Sport\MuscleGroup\Request\CreateMuscleGroupRequest;
use TYannis\SDS\Domain\Sport\MuscleGroup\Response\CreateMuscleGroupResponse;
use TYannis\SDS\Domain\Sport\MuscleGroup\Presenter\CreateMuscleGroupPresenterInterface;

/**
 * Class CreateMuscleGroup
 * @package TYannis\SDS\Domain\Sport\UseCase
 */
class CreateMuscleGroup
{
    /**
     * @var MuscleGroupGateway
     */
    private MuscleGroupGateway $gateway;

    /**
     * CreateMuscleGroup constructor.
     * @param MuscleGroupGateway $gateway
     */
    public function __construct(MuscleGroupGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @param CreateMuscleGroupRequest $request
     * @param CreateMuscleGroupPresenterInterface $presenter
     */
    public function execute(CreateMuscleGroupRequest $request, CreateMuscleGroupPresenterInterface $presenter)
    {
        $muscleGroup = MuscleGroup::fromCreate($request);

        $this->gateway->create($muscleGroup);

        $presenter->present(new CreateMuscleGroupResponse($muscleGroup));
    }
}
