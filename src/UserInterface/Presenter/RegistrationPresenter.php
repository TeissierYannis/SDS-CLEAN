<?php

namespace App\UserInterface\Presenter;

use App\UserInterface\ViewModel\RegistrationViewModel;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Security\Presenter\RegistrationPresenterInterface;
use TYannis\SDS\Domain\Security\Response\RegistrationResponse;

/**
 * Class RegistrationPresenter
 * @package App\UserInterface\Presenter
 */
class RegistrationPresenter implements RegistrationPresenterInterface
{
    /**
     * @var RegistrationViewModel
     */
    private RegistrationViewModel $viewModel;

    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * RegistrationPresenter constructor.
     * @param FlashBagInterface $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @inheritDoc
     */
    public function present(RegistrationResponse $response): void
    {
        $this->viewModel = new RegistrationViewModel($response->getUser());

        $this->flashBag->add(
            "success",
            "Bienvenue sur Code Challenge ! Votre inscription a été effectuée avec succès !"
        );
    }
}
