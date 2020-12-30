<?php

namespace TYannis\SDS\Domain\Tests\UserManagement;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\UserRepository;
use TYannis\SDS\Domain\UserManagement\Presenter\UpdateRolePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\UpdateRoleRequest;
use TYannis\SDS\Domain\UserManagement\Response\UpdateRoleResponse;
use TYannis\SDS\Domain\UserManagement\UseCase\UpdateRole;

/**
 * Class UpdateRoleTest
 * @package TYannis\SDS\Domain\Tests\UserManagement
 */
class UpdateRoleTest extends TestCase
{
    /**
     * @var UpdateRole
     */
    private UpdateRole $useCase;
    /**
     * @var UpdateRolePresenterInterface
     */
    private UpdateRolePresenterInterface $presenter;

    public function test(): void
    {
        $user = new User(Uuid::uuid4(), 'used@email.com', 'pseudo', 'password', false);

        $this->assertEquals('ROLE_USER', $user->getRole());

        $request = UpdateRoleRequest::create($user, 'ROLE_ADMIN');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateRoleResponse::class, $this->presenter->response);

        $this->assertInstanceOf(User::class, $this->presenter->response->getUser());

        $this->assertEquals('ROLE_ADMIN', $this->presenter->response->getUser()->getRole());
    }

    protected function setUp(): void
    {
        $this->presenter = new class () implements UpdateRolePresenterInterface {
            public UpdateRoleResponse $response;

            public function present(UpdateRoleResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new UpdateRole(new UserRepository());
    }
}
