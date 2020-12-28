<?php

namespace App\Infrastructure\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Class ExceptionListener
 * @package App\Infrastructure\EventListener
 */
class ExceptionListener
{
    /**
     * @var UrlGeneratorInterface
     */
    private UrlGeneratorInterface $urlGenerator;

    /**
     * ExceptionListener constructor.
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param ExceptionEvent $event
     * @return void
     */
    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        if ($exception->getMessage() === 'Unknown UUID' or str_contains(
            $exception->getMessage(),
            'Invalid UUID string:'
        )
        ) {
            $session = new Session();
            $session->getFlashBag()->set('error', 'Impossible de répondre à la demande');

            $response = new RedirectResponse($this->urlGenerator->generate('home'));
            $event->setResponse($response);
        }
    }
}
