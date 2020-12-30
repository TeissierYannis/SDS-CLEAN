<?php

namespace TYannis\SDS\Domain\UserManagement\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway;
use TYannis\SDS\Domain\UserManagement\Request\CreateRoleRequest;
use TYannis\SDS\Domain\UserManagement\Response\CreateRoleResponse;
use TYannis\SDS\Domain\UserManagement\Presenter\CreateRolePresenterInterface;

/**
 * Class CreateRole
 * @package TYannis\SDS\Domain\UserManagement\UseCase
 */
class CreateRole
{
    /**
     * @var RoleGateway
     */
    private RoleGateway $roleGateway;

    /**
     * CreateRole constructor.
     * @param  RoleGateway  $roleGateway
     */
    public function __construct(RoleGateway $roleGateway)
    {
        $this->roleGateway = $roleGateway;
    }

    /**
     * @param  CreateRoleRequest  $request
     * @param  CreateRolePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(CreateRoleRequest $request, CreateRolePresenterInterface $presenter)
    {
        $request->validate($this->roleGateway->getRoles());

        $role = Role::fromCreate($request);

        $this->roleGateway->create($role);

        $presenter->present(new CreateRoleResponse($role));
    }
}
