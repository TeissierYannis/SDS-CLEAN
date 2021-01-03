<?php

namespace App\UserInterface\Controller\Ticket;

use App\UserInterface\DataTransferObject\Ticket;
use App\UserInterface\Form\TicketType;
use App\UserInterface\Presenter\Ticket\ReplyPresenter;
use Assert\AssertionFailedException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Tickets\Entity\Ticket as DomainTicket;
use TYannis\SDS\Domain\Tickets\Request\ReplyRequest;
use TYannis\SDS\Domain\Tickets\UseCase\Reply;

/**
 * Class ReplyController
 * @package App\UserInterface\Controller\Ticket
 */
class ReplyController extends AbstractController
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
     * @param  DomainTicket  $domainTicket
     * @param  Request  $request
     * @param  Reply  $reply
     * @param  ReplyPresenter  $presenter
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError|AssertionFailedException
     */
    public function __invoke(DomainTicket $domainTicket, Request $request, Reply $reply, ReplyPresenter $presenter)
    {
        $ticket = new Ticket();

        $form = $this->formFactory
            ->create(TicketType::class, $ticket, ['admin_access' => true])
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $request = ReplyRequest::create(
                $domainTicket,
                $this->getUser()->getPseudo(),
                $form->get('message')->getData()
            );
            try {
                $reply->execute($request, $presenter);
            } catch (\Exception $e) {
                $this->addFlash(
                    "danger",
                    "Ooupps ! Une erreur s'est produite ! Veuillez réessayer plus tard !"
                );
            }
        }

        return new Response(
            $this->twig->render(
                'dashboard/administrator/ticket/reply.html.twig',
                [
                    'form' => $form->createView(),
                    'ticket' => $domainTicket
                ]
            )
        );
    }
}
