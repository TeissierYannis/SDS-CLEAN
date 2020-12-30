<?php

namespace TYannis\SDS\Domain\Tests\UserManagement\Role;

use Assert\AssertionFailedException;
use Generator;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\RoleRepository;
use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Presenter\Role\CreatePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\Role\CreateRequest;
use TYannis\SDS\Domain\UserManagement\Response\Role\CreateResponse;
use TYannis\SDS\Domain\UserManagement\UseCase\Role\Create;
use PHPUnit\Framework\TestCase;

/**
 * Class CreateRoleTest
 * @package TYannis\SDS\Domain\Tests\UserManagement
 */
class CreateRoleTest extends TestCase
{
    /**
     * @var CreatePresenterInterface
     */
    private $presenter;
    /**
     * @var Create
     */
    private Create $useCase;

    protected function setUp(): void
    {
        $this->presenter = new class () implements CreatePresenterInterface {
            public CreateResponse $response;

            public function present(CreateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Create(new RoleRepository());
    }


    public function testSuccessful(): void
    {
        $request = CreateRequest::create('ROLE_TEST');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);
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
        $request = CreateRequest::create($role);

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
