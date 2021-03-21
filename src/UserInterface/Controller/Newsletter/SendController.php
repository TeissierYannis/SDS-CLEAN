<?php

namespace App\UserInterface\Controller\Newsletter;

use App\Infrastructure\Adapter\Repository\UserRepository;
use App\UserInterface\Presenter\Newsletter\SendPresenter;
use Exception;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use TYannis\SDS\Domain\Newsletter\Request\SendRequest;
use TYannis\SDS\Domain\Newsletter\UseCase\Send as SendUseCase;

/**
 * Class Send
 * @package App\UserInterface\Controller\Newsletter
 */
class SendController extends AbstractController
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
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * CreateController constructor.
     * @param  FormFactoryInterface  $formFactory
     * @param  Environment  $twig
     * @param  UrlGeneratorInterface  $urlGenerator
     * @param  UserRepository  $userRepository
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator,
        UserRepository $userRepository
    ) {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
        $this->userRepository = $userRepository;
    }

    /**
     * @param Request $request
     * @param SendUseCase $send
     * @param SendPresenter $presenter
     * @return RedirectResponse|Response
     * @throws \Assert\AssertionFailedException
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke(Request $request, SendUseCase $send, SendPresenter $presenter)
    {
        $form = $this->generateForm()
            ->handleRequest($request);

        $emails = $this->userRepository->getNewsletterSubscriber();


        if ($form->isSubmitted() and $form->isValid()) {
            $request = SendRequest::create($form->get('object')->getData(), $form->get('body')->getData(), $emails);

            try {
                $send->execute($request, $presenter);
            } catch (Exception $e) {
                $this->addFlash(
                    "danger",
                    "Ooupps ! Une erreur s'est produite ! Veuillez réessayer plus tard !"
                );
            }

            return new RedirectResponse($this->urlGenerator->generate('newsletter_send'));
        }

        return new Response(
            $this->twig->render(
                'dashboard/administrator/newsletter/send.html.twig',
                [
                    'form' => $form->createView(),
                    'emails' => $emails
                ]
            )
        );
    }

    /**
     * @return FormInterface
     */
    private function generateForm(): FormInterface
    {
        return $this->createFormBuilder()
            ->add(
                'object',
                TextType::class,
                [
                    'label' => 'Sujet de la newsletter'
                ]
            )
            ->add(
                'body',
                CKEditorType::class,
                [
                    'label' => 'Contenu de la newsletter'
                ]
            )
            ->getForm();
    }
}
