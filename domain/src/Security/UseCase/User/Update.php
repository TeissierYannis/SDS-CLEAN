<?php

namespace TYannis\SDS\Domain\Security\UseCase\User;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Request\User\UpdateRequest;
use TYannis\SDS\Domain\Security\Response\User\UpdateResponse;
use TYannis\SDS\Domain\Security\Presenter\User\UpdatePresenterInterface;

/**
 * Class Update
 * @package TYannis\SDS\Domain\Security\UseCase\User
 */
class Update
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * Update constructor.
     * @param  UserGateway  $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @param  UpdateRequest  $request
     * @param  UpdatePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRequest $request, UpdatePresenterInterface $presenter)
    {
        $request->validate();

        $user = $this->userGateway->getUserByEmail($request->getUser()->getEmail());

        $user->setRoles($request->getRoles());

        $this->userGateway->update($user);

        $presenter->present(new UpdateResponse($user));
    }
}
