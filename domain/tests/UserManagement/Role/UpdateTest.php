<?php

namespace TYannis\SDS\Domain\Tests\UserManagement\Role;

use Assert\AssertionFailedException;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\RoleRepository;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\UserRepository;
use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Presenter\Role\UpdatePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\Role\UpdateRequest;
use TYannis\SDS\Domain\UserManagement\Response\Role\UpdateResponse;
use TYannis\SDS\Domain\UserManagement\UseCase\Role\Update;

/**
 * Class UpdateRoleTest
 * @package TYannis\SDS\Domain\Tests\UserManagement
 */
class UpdateTest extends TestCase
{
    /**
     * @var Update
     */
    private Update $useCase;
    /**
     * @var UpdatePresenterInterface
     */
    private UpdatePresenterInterface $presenter;


    protected function setUp(): void
    {
        $this->presenter = new class () implements UpdatePresenterInterface {
            public UpdateResponse $response;

            public function present(UpdateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Update(new UserRepository(), new RoleRepository());
    }

    public function testSuccessful(): void
    {
        $user = new User(Uuid::uuid4(), 'used@email.com', 'pseudo', 'password', false);

        $role = Role::create('ROLE_USER');

        $this->assertEquals('ROLE_USER', $role->getName());
        $this->assertEquals('ROLE_USER', $user->getRole());

        $request = UpdateRequest::create($user, 'ROLE_ADMIN');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateResponse::class, $this->presenter->response);

        $this->assertInstanceOf(User::class, $this->presenter->response->getUser());

        $this->assertEquals('ROLE_ADMIN', $this->presenter->response->getUser()->getRole());
    }


    public function testFailed()
    {
        $user = new User(Uuid::uuid4(), 'used@email.com', 'pseudo', 'password', false);


        $request = UpdateRequest::create($user, 'ROLE_UNKNOWN');

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }
}