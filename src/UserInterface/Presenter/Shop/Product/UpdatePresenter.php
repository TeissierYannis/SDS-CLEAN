<?php

namespace App\UserInterface\Presenter\Shop\Product;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Shop\Presenter\Product\UpdatePresenterInterface;
use TYannis\SDS\Domain\Shop\Response\Product\UpdateResponse;

/**
 * Class UpdatePresenter
 * @package App\UserInterface\Presenter\Shop\Product
 */
class UpdatePresenter implements UpdatePresenterInterface
{
    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * UpdatePresenter constructor.
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
            "Produit modifié avec succès"
        );
    }
}
