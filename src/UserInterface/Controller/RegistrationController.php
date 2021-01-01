<?php

namespace App\UserInterface\Controller;

use App\UserInterface\Form\RegistrationType;
use App\UserInterface\Presenter\RegistrationPresenter;
use Assert\AssertionFailedException;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Security\Request\RegistrationRequest;
use TYannis\SDS\Domain\Security\UseCase\Registration;

/**
 * Class RegistrationController
 * @package App\UserInterface\Controller
 */
class RegistrationController
{
    /**
     * @var FormFactoryInterface
     */
    private FormFactoryInterface $formFactory;

    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * @var UrlGeneratorInterface
     */
    private UrlGeneratorInterface $urlGenerator;

    /**
     * RegistrationController constructor.
     * @param FormFactoryInterface $formFactory
     * @param Environment $twig
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param Request $request
     * @param Registration $registration
     * @param RegistrationPresenter $presenter
     *
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError|AssertionFailedException
     */
    public function __invoke(Request $request, Registration $registration, RegistrationPresenter $presenter): Response
    {
        $form = $this->formFactory->create(RegistrationType::class)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request = RegistrationRequest::create(
                $form->getData()->getEmail(),
                $form->getData()->getPseudo(),
                $form->getData()->getPlainPassword(),
                $form->getData()->getIsNewsletterRegistered(),
                ['ROLE_USER']
            );
            $registration->execute($request, $presenter);

            return new RedirectResponse($this->urlGenerator->generate("home"));
        }

        return new Response($this->twig->render("security/registration.html.twig", [
            "form" => $form->createView()
        ]));
    }
}
