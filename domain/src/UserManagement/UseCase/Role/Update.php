<?php

namespace TYannis\SDS\Domain\UserManagement\UseCase\Role;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway;
use TYannis\SDS\Domain\UserManagement\Presenter\Role\UpdatePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Request\Role\UpdateRequest;
use TYannis\SDS\Domain\UserManagement\Response\Role\UpdateResponse;

/**
 * Class Update
 * @package TYannis\SDS\Domain\UserManagement\UseCase\Update
 */
class Update
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
     * Role constructor.
     * @param  UserGateway  $userGateway
     * @param  RoleGateway  $roleGateway
     */
    public function __construct(UserGateway $userGateway, RoleGateway $roleGateway)
    {
        $this->userGateway = $userGateway;
        $this->roleGateway = $roleGateway;
    }

    /**
     * @param  UpdateRequest  $request
     * @param  UpdatePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRequest $request, UpdatePresenterInterface $presenter)
    {
        $request->validate($this->roleGateway->getRoles());

        $user = $this->userGateway->getUserByEmail($request->getUser()->getEmail());

        $user->setRole($request->getRole());

        $this->userGateway->update($user);

        $presenter->present(new UpdateResponse($user));
    }
}
