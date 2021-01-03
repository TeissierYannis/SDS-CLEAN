<?php

namespace App\UserInterface\Presenter\Ticket;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Newsletter\Presenter\SendPresenterInterface;
use TYannis\SDS\Domain\Newsletter\Response\SendResponse;
use TYannis\SDS\Domain\Tickets\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Tickets\Response\CreateResponse;

class SendPresenter implements CreatePresenterInterface
{
    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * AskPasswordResetPresenter constructor.
     * @param  FlashBagInterface  $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @param  CreateResponse  $response
     */
    public function present(CreateResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Le message à été envoyé !"
        );
    }
}
