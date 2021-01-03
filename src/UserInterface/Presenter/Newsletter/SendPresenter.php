<?php

namespace App\UserInterface\Presenter\Newsletter;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Newsletter\Presenter\SendPresenterInterface;
use TYannis\SDS\Domain\Newsletter\Response\SendResponse;

class SendPresenter implements SendPresenterInterface
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
     * @inheritDoc
     */
    public function present(SendResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "La newsletter à été envoyé !"
        );
    }
}
