<?php

namespace App\UserInterface\Presenter\Ticket;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Tickets\Presenter\ReplyPresenterInterface;
use TYannis\SDS\Domain\Tickets\Response\ReplyResponse;

class ReplyPresenter implements ReplyPresenterInterface
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
     * @param  ReplyResponse  $response
     */
    public function present(ReplyResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Le message à été envoyé ! Le ticket à été placé comme terminé"
        );
    }
}
