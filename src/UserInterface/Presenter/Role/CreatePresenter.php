<?php

namespace App\UserInterface\Presenter\Role;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\UserManagement\Presenter\Role\CreatePresenterInterface;
use TYannis\SDS\Domain\UserManagement\Response\Role\CreateResponse;

/**
 * Class CreatePresenter
 * @package App\UserInterface\Presenter\Role
 */
class CreatePresenter implements CreatePresenterInterface
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
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Rôle ajouté avec succès"
        );
    }
}
