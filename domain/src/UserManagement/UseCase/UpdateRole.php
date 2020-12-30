<?php

namespace TYannis\SDS\Domain\UserManagement\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway;
use TYannis\SDS\Domain\UserManagement\Presenter\UpdateRolePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\UpdateRoleRequest;
use TYannis\SDS\Domain\UserManagement\Response\UpdateRoleResponse;

/**
 * Class UpdateRole
 * @package TYannis\SDS\Domain\UserManagement\UseCase
 */
class UpdateRole
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * @var RoleGateway
     */
    private RoleGateway $roleGateway;

    /**
     * UpdateRole constructor.
     * @param  UserGateway  $userGateway
     * @param  RoleGateway  $roleGateway
     */
    public function __construct(UserGateway $userGateway, RoleGateway $roleGateway)
    {
        $this->userGateway = $userGateway;
        $this->roleGateway = $roleGateway;
    }

    /**
     * @param  UpdateRoleRequest  $request
     * @param  UpdateRolePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRoleRequest $request, UpdateRolePresenterInterface $presenter)
    {
        $request->validate($this->roleGateway->getRoles());

        $user = $this->userGateway->getUserByEmail($request->getUser()->getEmail());

        $user->setRole($request->getRole());

        $this->userGateway->update($user);

        $presenter->present(new UpdateRoleResponse($user));
    }
}
