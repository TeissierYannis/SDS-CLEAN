<?php

namespace App\UserInterface\Controller\Security\Role;

use App\UserInterface\DataTransferObject\Role;
use App\UserInterface\Form\RoleType;
use App\UserInterface\Presenter\Security\Role\CreatePresenter;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use TYannis\SDS\Domain\Security\Request\Role\CreateRequest;
use TYannis\SDS\Domain\Security\UseCase\Role\Create;

/**
 * Class CreateController
 * @package App\UserInterface\Controller\UserManagement\Role
 */
class CreateController
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
     * CreateController constructor.
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
     * @param  Request  $request
     * @param  Create  $create
     * @param  CreatePresenter  $presenter
     * @return Response
     */
    public function __invoke(Request $request, Create $create, CreatePresenter $presenter)
    {
        $role = new Role();
        $form = $this->formFactory
            ->create(RoleType::class, $role)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $role = $form->getData()->getName();
            $role = strtoupper($role);
            $role = 'ROLE_' . $role;

            $request = CreateRequest::create($role);

            $create->execute($request, $presenter);

            return new RedirectResponse($this->urlGenerator->generate('home'));
        }

        return new Response(
            $this->twig->render(
                'management/users/roles/create.html.twig',
                [
                    'form' => $form->createView()
                ]
            )
        );
    }
}
