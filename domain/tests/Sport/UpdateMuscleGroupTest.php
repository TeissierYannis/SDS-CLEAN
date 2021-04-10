<?php

namespace TYannis\SDS\Domain\Tests\Sport;

use Assert\AssertionFailedException;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Sport\MuscleGroup\Entity\MuscleGroup;
use TYannis\SDS\Domain\Sport\MuscleGroup\Presenter\UpdateMuscleGroupPresenterInterface;
use TYannis\SDS\Domain\Sport\MuscleGroup\Request\UpdateMuscleGroupRequest;
use TYannis\SDS\Domain\Sport\MuscleGroup\Response\UpdateMuscleGroupResponse;
use TYannis\SDS\Domain\Sport\MuscleGroup\UseCase\UpdateMuscleGroup;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\MuscleGroupRepository;

/**
 * Class UpdateMuscleGroupTest
 * @package TYannis\SDS\Domain\Tests\Sport
 */
class UpdateMuscleGroupTest extends TestCase
{
    /**
     * @var UpdateMuscleGroupPresenterInterface
     */
    private UpdateMuscleGroupPresenterInterface $presenter;
    /**
     * @var UpdateMuscleGroup
     */
    private UpdateMuscleGroup $useCase;

    protected function setUp()
    {
        $this->presenter = new class() implements UpdateMuscleGroupPresenterInterface {
            public UpdateMuscleGroupResponse $response;

            public function present(UpdateMuscleGroupResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new UpdateMuscleGroup(new MuscleGroupRepository());
    }

    /**
     * @throws \Assert\AssertionFailedException
     */
    public function testSuccess(): void
    {
        $id = Uuid::uuid4();

        $request = UpdateMuscleGroupRequest::create($id, 'pectoral');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateMuscleGroupResponse::class, $this->presenter->response);
        $this->assertInstanceOf(MuscleGroup::class, $this->presenter->response->getMuscleGroup());

        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getMuscleGroup()->getId());
        $this->assertEquals($id, $this->presenter->response->getMuscleGroup()->getId());
        $this->assertEquals('pectoral', $this->presenter->response->getMuscleGroup()->getName());
    }

    /**
     * @dataProvider provideFailedData
     */
    public function testFailed(string $name): void
    {
        $id = Uuid::uuid4();

        $request = UpdateMuscleGroupRequest::create($id, $name);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return \Generator
     */
    public function provideFailedData(): \Generator
    {
        yield ['s'];
        yield [''];
    }
}
