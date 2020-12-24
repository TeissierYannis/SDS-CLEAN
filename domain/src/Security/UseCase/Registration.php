<?php

namespace TYannis\SDS\Domain\Security\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Presenter\RegistrationPresenterInterface;
use TYannis\SDS\Domain\Security\Request\RegistrationRequest;
use TYannis\SDS\Domain\Security\Response\RegistrationResponse;

/**
 * Class Registration
 *
 * @package TYannis\SDS\Domain\Security\UseCase
 */
class Registration
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * Registration constructor.
     *
     * @param UserGateway $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @param RegistrationRequest            $request
     * @param RegistrationPresenterInterface $presenter
     *
     * @throws AssertionFailedException
     */
    public function execute(RegistrationRequest $request, RegistrationPresenterInterface $presenter)
    {
        $request->validate($this->userGateway);
        $user = User::fromRegistration($request);
        $this->userGateway->register($user);
        $presenter->present(new RegistrationResponse($user));
    }
}
