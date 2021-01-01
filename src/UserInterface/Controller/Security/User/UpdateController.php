<?php

namespace App\UserInterface\Controller\Security\User;

use App\UserInterface\DataTransferObject\User;
use App\UserInterface\Form\UserType;
use App\UserInterface\Presenter\Security\User\UpdatePresenter;
use Assert\AssertionFailedException;
use Exception;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Security\Entity\User as UserDomain;
use TYannis\SDS\Domain\Security\Request\User\UpdateRequest;
use TYannis\SDS\Domain\Security\UseCase\User\Update;

/**
 * Class UpdateController
 * @package App\UserInterface\Controller\Security\User
 */
class UpdateController
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
     * UpdateController constructor.
     * @param  FormFactoryInterface  $formFactory
     * @param  Environment  $twig
     * @param  UrlGeneratorInterface  $urlGenerator
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
     * @param  UserDomain  $domainUser
     * @param  Request  $request
     * @param  Update  $update
     * @param  UpdatePresenter  $presenter
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError|AssertionFailedException
     */
    public function __invoke(
        UserDomain $domainUser,
        Request $request,
        Update $update,
        UpdatePresenter $presenter
    ): Response {
        $user = User::fromDomainUser($domainUser);

        $form = $this->formFactory
            ->create(UserType::class, $user)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $email = $form->get('email')->getData() === $domainUser->getEmail() ? null : $form->get('email')->getData();

            $pseudo = $form->get('pseudo')->getData() === $domainUser->getPseudo() ? null : $form->get(
                'pseudo'
            )->getData();

            $isNewsletterRegistered = $form->get('isNewsletterRegistered')
                ->getData() === $domainUser->getIsNewsletterRegistered() ? null : $form->get('isNewsletterRegistered')
                ->getData();

            $roles = $form->get('roles')->getData() === $domainUser->getRoles() ? null : $form->get('roles')->getData();

            $request = UpdateRequest::create(
                $domainUser,
                $email,
                $pseudo,
                $isNewsletterRegistered,
                $roles
            );
            try {
                $update->execute($request, $presenter);
            } catch (Exception $e) {
                $form->addError(new FormError($e->getMessage()));
                $flashBag = new FlashBag();
                $flashBag->clear();
            }
        }

        return new Response(
            $this->twig->render(
                'dashboard/administrator/users/update.html.twig',
                [
                    'form' => $form->createView()
                ]
            )
        );
    }
}
