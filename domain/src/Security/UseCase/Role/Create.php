<?php

namespace TYannis\SDS\Domain\Security\UseCase\Role;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Entity\Role;
use TYannis\SDS\Domain\Security\Exception\NonUniqueRoleException;
use TYannis\SDS\Domain\Security\Gateway\RoleGateway;
use TYannis\SDS\Domain\Security\Presenter\Role\CreatePresenterInterface;
use TYannis\SDS\Domain\Security\Request\Role\CreateRequest;
use TYannis\SDS\Domain\Security\Response\Role\CreateResponse;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Security\UseCase\Role
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
        $request->validate($this->roleGateway);

        $role = Role::fromCreate($request);

        $this->roleGateway->create($role);

        $presenter->present(new CreateResponse($role));
    }
}
