<?php

namespace TYannis\SDS\Domain\Security\UseCase;

use Assert\AssertionFailedException;
use Exception;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Presenter\AskPasswordResetPresenterInterface;
use TYannis\SDS\Domain\Security\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Security\Request\AskPasswordResetRequest;
use TYannis\SDS\Domain\Security\Response\AskPasswordResetResponse;

/**
 * Class AskPasswordReset
 * @package TYannis\SDS\Domain\Security\UseCase
 */
class AskPasswordReset
{
    /**
     * @var UserGateway
     */
    private UserGateway $gateway;

    /**
     * @var MailProviderInterface
     */
    private MailProviderInterface $mailer;

    /**
     * @var RouterInterface
     */
    private RouterInterface $urlGenerator;

    /**
     * AskPasswordReset constructor.
     * @param  UserGateway  $gateway
     * @param  MailProviderInterface  $mailer
     * @param  RouterInterface  $urlGenerator
     */
    public function __construct(
        UserGateway $gateway,
        MailProviderInterface $mailer,
        RouterInterface $urlGenerator
    ) {
        $this->gateway = $gateway;
        $this->mailer = $mailer;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param  AskPasswordResetRequest  $request
     * @param  AskPasswordResetPresenterInterface  $presenter
     * @throws Exception
     * @throws AssertionFailedException
     */
    public function execute(AskPasswordResetRequest $request, AskPasswordResetPresenterInterface $presenter)
    {
        $request->validate();

        /** @var User $user */
        $user = $this->gateway->getUserByEmail($request->getEmail());


        if ($user) {
            User::requestPasswordReset($user, Uuid::uuid4());

            $this->gateway->update($user);

            $link = $this->urlGenerator->generate(
                'recover_password',
                [
                    'email' => $user->getEmail(),
                    'token' => $user->getPasswordResetToken(),
                ],
                UrlGeneratorInterface::ABSOLUTE_URL
            );


            $this->mailer->sendPasswordResetLink($user->getEmail(), $user->getPseudo(), $link);
        }

        $presenter->present(new AskPasswordResetResponse($user));
    }
}
