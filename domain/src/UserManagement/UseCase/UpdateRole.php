<?php

namespace TYannis\SDS\Domain\UserManagement\UseCase;

use TYannis\SDS\Domain\Security\Gateway\UserGateway;
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
     * UpdateRole constructor.
     * @param  UserGateway  $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @param  UpdateRoleRequest  $request
     * @param  UpdateRolePresenterInterface  $presenter
     */
    public function execute(UpdateRoleRequest $request, UpdateRolePresenterInterface $presenter)
    {
        $user = $this->userGateway->getUserByEmail($request->getUser()->getEmail());

        $user->setRole($request->getRole());

        $this->userGateway->update($user);

        $presenter->present(new UpdateRoleResponse($user));
    }
}
