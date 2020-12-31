<?php

namespace TYannis\SDS\Domain\Security\UseCase;

use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Request\LoginRequest;
use TYannis\SDS\Domain\Security\Response\LoginResponse;
use TYannis\SDS\Domain\Security\Presenter\LoginPresenterInterface;

/**
 * Class Login
 * @package TYannis\SDS\Domain\Security\UseCase
 */
class Login
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * Login constructor.
     *
     * @param UserGateway $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @param LoginRequest $request
     * @param LoginPresenterInterface $presenter
     */
    public function execute(LoginRequest $request, LoginPresenterInterface $presenter)
    {
        $request->validate();

        $user = $this->userGateway->getUserByEmail($request->getEmail());

        if ($user) {
            $passwordValid = password_verify($request->getPassword(), $user->getPassword());
        }

        $presenter->present(new LoginResponse($user, $passwordValid ?? false));
    }
}
