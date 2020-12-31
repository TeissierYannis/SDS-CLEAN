<?php

namespace TYannis\SDS\Domain\Tests\Security\Role;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Entity\Role;
use TYannis\SDS\Domain\Security\Presenter\Role\CreatePresenterInterface;
use TYannis\SDS\Domain\Security\Request\Role\CreateRequest;
use TYannis\SDS\Domain\Security\Response\Role\CreateResponse;
use TYannis\SDS\Domain\Security\UseCase\Role\Create;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\RoleRepository;

/**
 * Class CreateRoleTest
 * @package TYannis\SDS\Domain\Tests\Security\Role
 */
class CreateTest extends TestCase
{
    /**
     * @var CreatePresenterInterface
     */
    private $presenter;
    /**
     * @var Create
     */
    private Create $useCase;

    public function testSuccessful(): void
    {
        $request = CreateRequest::create('ROLE_ADMIN');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);
        $this->assertInstanceOf(Role::class, $this->presenter->response->getRole());

        $this->assertEquals('ROLE_ADMIN', $this->presenter->response->getRole()->getName());
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
        yield ['ROLE_USED'];
    }

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
}
