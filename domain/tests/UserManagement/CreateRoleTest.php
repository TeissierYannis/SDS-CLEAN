<?php

namespace TYannis\SDS\Domain\Tests\UserManagement;

use Assert\AssertionFailedException;
use Generator;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\RoleRepository;
use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Presenter\CreateRolePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\CreateRoleRequest;
use TYannis\SDS\Domain\UserManagement\Response\CreateRoleResponse;
use TYannis\SDS\Domain\UserManagement\UseCase\CreateRole;
use PHPUnit\Framework\TestCase;

/**
 * Class CreateRoleTest
 * @package TYannis\SDS\Domain\Tests\UserManagement
 */
class CreateRoleTest extends TestCase
{
    /**
     * @var CreateRolePresenterInterface
     */
    private $presenter;
    /**
     * @var CreateRole
     */
    private CreateRole $useCase;

    protected function setUp(): void
    {
        $this->presenter = new class () implements CreateRolePresenterInterface {
            public CreateRoleResponse $response;

            public function present(CreateRoleResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new CreateRole(new RoleRepository());
    }


    public function testSuccessful(): void
    {
        $request = CreateRoleRequest::create('ROLE_TEST');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateRoleResponse::class, $this->presenter->response);
        $this->assertInstanceOf(Role::class, $this->presenter->response->getRole());

        $this->assertEquals('ROLE_TEST', $this->presenter->response->getRole()->getName());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getRole()->getId());
    }

    /**
     * @dataProvider provideFailedData
     * @param  string  $role
     */
    public function testFailed(string $role): void
    {
        $request = CreateRoleRequest::create($role);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield [''];
        yield ['aa'];
        yield ['ROLE_UNKNOWN'];
    }
}
