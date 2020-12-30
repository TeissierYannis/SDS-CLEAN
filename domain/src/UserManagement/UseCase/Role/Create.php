<?php

namespace TYannis\SDS\Domain\UserManagement\UseCase\Role;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway;
use TYannis\SDS\Domain\UserManagement\Request\Role\CreateRequest;
use TYannis\SDS\Domain\UserManagement\Response\Role\CreateResponse;
use TYannis\SDS\Domain\UserManagement\Presenter\Role\CreatePresenterInterface;

/**
 * Class Create
 * @package TYannis\SDS\Domain\UserManagement\UseCase
 */
class Create
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
     * @param  CreateRequest  $request
     * @param  CreatePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate($this->roleGateway->getRoles());

        $role = Role::fromCreate($request);

        $this->roleGateway->create($role);

        $presenter->present(new CreateResponse($role));
    }
}
