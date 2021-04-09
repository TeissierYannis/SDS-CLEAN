<?php

namespace TYannis\SDS\Domain\Tests\Sport;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;
use TYannis\SDS\Domain\Sport\MuscleGroup\Presenter\CreateMuscleGroupPresenterInterface;
use TYannis\SDS\Domain\Sport\MuscleGroup\Request\CreateMuscleGroupRequest;
use TYannis\SDS\Domain\Sport\MuscleGroup\Response\CreateMuscleGroupResponse;
use TYannis\SDS\Domain\Sport\MuscleGroup\UseCase\CreateMuscleGroup;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\MuscleGroupRepository;

/**
 * Class CreateMuscleGroupTest
 * @package TYannis\SDS\Domain\Tests\Sport
 */
class CreateMuscleGroupTest extends TestCase
{
    /**
     * @var CreateMuscleGroupPresenterInterface
     */
    private CreateMuscleGroupPresenterInterface $presenter;
    /**
     * @var CreateMuscleGroup
     */
    private CreateMuscleGroup $useCase;

    protected function setUp(): void
    {
        $this->presenter = new class() implements CreateMuscleGroupPresenterInterface {
            public CreateMuscleGroupResponse $response;

            public function present(CreateMuscleGroupResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new CreateMuscleGroup(new MuscleGroupRepository());
    }

    public function testSuccessful(): void
    {
        $request = CreateMuscleGroupRequest::create('Grand pectoral');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateMuscleGroupResponse::class, $this->presenter->response);
        $this->assertInstanceOf(MuscleGroup::class, $this->presenter->response->getMuscleGroup());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getMuscleGroup()->getId());
        $this->assertEquals('Grand pectoral', $this->presenter->response->getMuscleGroup()->getName());
    }
}
