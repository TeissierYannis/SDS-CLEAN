<?php

namespace App\Infrastructure\Security\Guard;

use App\Infrastructure\Security\User;
use Assert\AssertionFailedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use TYannis\SDS\Domain\Security\Presenter\LoginPresenterInterface;
use TYannis\SDS\Domain\Security\Request\LoginRequest;
use TYannis\SDS\Domain\Security\Response\LoginResponse;
use TYannis\SDS\Domain\Security\UseCase\Login;

/**
 * Class WebAuthenticator
 *
 * @package App\Infrastructure\Security\Guard
 */
class WebAuthenticator extends AbstractFormLoginAuthenticator implements LoginPresenterInterface
{
    /**
     * @var Login
     */
    private Login $login;

    /**
     * @var LoginResponse
     */
    private LoginResponse $response;

    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * WebAuthenticator constructor.
     * @param Login $login
     * @param FlashBagInterface $flashBag
     */
    public function __construct(Login $login, FlashBagInterface $flashBag)
    {
        $this->login = $login;
        $this->flashBag = $flashBag;
    }


    /**
     * @return string
     */
    protected function getLoginUrl()
    {
        return '/login';
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function supports(Request $request)
    {
        return $this->getLoginUrl() === $request->getPathInfo() and $request->isMethod(Request::METHOD_POST);
    }

    /**
     * @param Request $request
     * @return LoginRequest
     */
    public function getCredentials(Request $request)
    {
        return new LoginRequest(
            $request->get('username', ''),
            $request->get('password', '')
        );
    }

    /**
     * @param LoginRequest $credentials
     * @param UserProviderInterface $userProvider
     * @return UserInterface|void|null
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        try {
            $this->login->execute($credentials, $this);
        } catch (AssertionFailedException $exception) {
            throw new AuthenticationException($exception->getMessage());
        }

        if ($this->response->getUser() === null) {
            throw new UsernameNotFoundException('User not found !');
        }

        return new User($this->response->getUser());
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        if (!$this->response->isPasswordValid()) {
            throw new AuthenticationException('Wrong credentials !');
        }

        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {
        $this->flashBag->add('success', 'Bonjour !');
        return new RedirectResponse('/');
    }

    public function present(LoginResponse $response): void
    {
        $this->response = $response;
    }
}
