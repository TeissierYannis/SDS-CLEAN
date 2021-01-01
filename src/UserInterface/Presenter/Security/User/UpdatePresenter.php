<?php

namespace App\UserInterface\Presenter\Security\User;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Security\Presenter\User\UpdatePresenterInterface;
use TYannis\SDS\Domain\Security\Response\User\UpdateResponse;

/**
 * Class UpdatePresenter
 * @package App\UserInterface\Presenter\Security\User
 */
class UpdatePresenter implements UpdatePresenterInterface
{
    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * CreatePresenter constructor.
     * @param FlashBagInterface $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @param UpdateResponse $response
     */
    public function present(UpdateResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Utilisateur modifié avec succès"
        );
    }
}
