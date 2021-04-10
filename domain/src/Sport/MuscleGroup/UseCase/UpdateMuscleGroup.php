<?php

namespace TYannis\SDS\Domain\Sport\MuscleGroup\UseCase;

use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;
use TYannis\SDS\Domain\Sport\MuscleGroup\Gateway\MuscleGroupGateway;
use TYannis\SDS\Domain\Sport\MuscleGroup\Request\UpdateMuscleGroupRequest;
use TYannis\SDS\Domain\Sport\MuscleGroup\Response\UpdateMuscleGroupResponse;
use TYannis\SDS\Domain\Sport\MuscleGroup\Presenter\UpdateMuscleGroupPresenterInterface;

/**
 * Class UpdateMuscleGroup
 * @package TYannis\SDS\Domain\Sport\MuscleGroup\UseCase
 */
class UpdateMuscleGroup
{
    /**
     * @var MuscleGroupGateway
     */
    private MuscleGroupGateway $gateway;

    /**
     * UpdateMuscleGroup constructor.
     * @param MuscleGroupGateway $gateway
     */
    public function __construct(MuscleGroupGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @param UpdateMuscleGroupRequest $request
     * @param UpdateMuscleGroupPresenterInterface $presenter
     * @throws \Assert\AssertionFailedException
     */
    public function execute(UpdateMuscleGroupRequest $request, UpdateMuscleGroupPresenterInterface $presenter)
    {
        $request->validate();

        $muscleGroup = $this->gateway->getMuscleGroupById($request->getId());
        $muscleGroup->setName($request->getName());

        $this->gateway->update($muscleGroup);

        $presenter->present(new UpdateMuscleGroupResponse($muscleGroup));
    }
}
