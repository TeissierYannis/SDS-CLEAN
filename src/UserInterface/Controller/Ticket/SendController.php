<?php

namespace App\UserInterface\Controller\Ticket;

use App\UserInterface\DataTransferObject\Ticket;
use App\UserInterface\Form\TicketType;
use App\UserInterface\Presenter\Ticket\SendPresenter;
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
use TYannis\SDS\Domain\Tickets\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\CreateRequest;
use TYannis\SDS\Domain\Tickets\UseCase\Create;

/**
 * Class Send
 * @package App\UserInterface\Controller\Ticket
 */
class SendController
{
    /** @var string  */
    private const PENDING = 'PENDING';
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
     * Send constructor.
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
     * @param  Create  $send
     * @param  SendPresenter  $presenter
     * @return Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(Request $request, Create $send, SendPresenter $presenter)
    {
        $ticket = new Ticket();

        $form = $this->formFactory
            ->create(TicketType::class, $ticket)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $sendedAt = new \DateTime();

            $request = CreateRequest::create(
                $form->get('email')->getData(),
                $form->get('message')->getData(),
                $sendedAt,
                self::PENDING
            );

            $send->execute($request, $presenter);

            return new RedirectResponse($this->urlGenerator->generate('home'));
        }

        return new Response(
            $this->twig->render(
                'public/ticket/send.html.twig',
                [
                    'form' => $form->createView()
                ]
            )
        );
    }
}
