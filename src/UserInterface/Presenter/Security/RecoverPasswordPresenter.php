<?php

namespace App\UserInterface\Presenter\Security;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Security\Presenter\RecoverPasswordPresenterInterface;
use TYannis\SDS\Domain\Security\Response\RecoverPasswordResponse;

class RecoverPasswordPresenter implements RecoverPasswordPresenterInterface
{
    private FlashBagInterface $flashBag;

    /**
     * RecoverPasswordPresenter constructor.
     * @param FlashBagInterface $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @inheritDoc
     */
    public function present(RecoverPasswordResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Mot de passe changer avec succès !"
        );
    }
}
