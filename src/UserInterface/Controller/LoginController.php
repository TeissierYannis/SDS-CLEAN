<?php

namespace App\UserInterface\Controller;

use App\UserInterface\ViewModel\LoginViewModel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class LoginController
 * @package App\UserInterface\Controller
 */
class LoginController
{
    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * LoginController constructor.
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param  AuthenticationUtils  $authenticationUtils
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(AuthenticationUtils $authenticationUtils): Response
    {
        return new Response($this->twig->render('security/login.html.twig', [
            'vm' => LoginViewModel::fromAuthenticationUtils($authenticationUtils)
        ]));
    }
}
