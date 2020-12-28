<?php

namespace TYannis\SDS\Domain\Security\UseCase;

use Assert\AssertionFailedException;
use Assert\InvalidArgumentException;
use DateTimeImmutable;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Exception\UserNotFoundException;
use TYannis\SDS\Domain\Security\Exception\PasswordRecoveryInvalidTokenException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Request\RecoverPasswordRequest;
use TYannis\SDS\Domain\Security\Response\RecoverPasswordResponse;
use TYannis\SDS\Domain\Security\Presenter\RecoverPasswordPresenterInterface;

/**
 * Class RecoverPassword
 * @package TYannis\SDS\Domain\Security\UseCase
 */
class RecoverPassword
{
    public const TOKEN_TIMEOUT = 600;

    /**
     * @var UserGateway
     */
    private UserGateway $gateway;

    /**
     * RecoverPassword constructor.
     * @param UserGateway $gateway
     */
    public function __construct(UserGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @param RecoverPasswordRequest $request
     * @param RecoverPasswordPresenterInterface $presenter
     * @throws AssertionFailedException
     * @throws UserNotFoundException
     * @throws PasswordRecoveryInvalidTokenException
     */
    public function execute(RecoverPasswordRequest $request, RecoverPasswordPresenterInterface $presenter)
    {
        $request->validate();

        /** @var User $user */
        $user = $this->gateway->getUserByEmail($request->getEmail());//dd($user);

        if (null === $user) {
            throw new PasswordRecoveryInvalidTokenException(
                "User with {$request->getEmail()} doesn't exist.",
                400
            );
        }

        if (!$this->isTokenValid($request, $user)) {
            throw new PasswordRecoveryInvalidTokenException("Invalid token.", 400);
        }

        User::resetPassword($user, $request);

        $this->gateway->update($user);

        $presenter->present(new RecoverPasswordResponse($user));
    }

    private function isTokenValid(RecoverPasswordRequest $request, User $user): bool
    {
        if (!$user->getPasswordResetRequestedAt()) {
            return false;
        }
        $interval =
            (new DateTimeImmutable())->getTimestamp() - $user->getPasswordResetRequestedAt()->getTimestamp();

        return $request->getToken() === $user->getPasswordResetToken() && self::TOKEN_TIMEOUT >= $interval;
    }
}
