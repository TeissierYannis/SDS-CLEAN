<?php

namespace App\UserInterface\Presenter\Shop\Product;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Shop\Presenter\Product\RemovePresenterInterface;
use TYannis\SDS\Domain\Shop\Response\Product\RemoveResponse;

/**
 * Class RemovePresenter
 * @package App\UserInterface\Presenter\Shop\Product
 */
class RemovePresenter implements RemovePresenterInterface
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
     * @param RemoveResponse $response
     */
    public function present(RemoveResponse $response): void
    {
        if (is_null($response->getProduct())) {
            $this->flashBag->add(
                "success",
                "Produit supprimé avec succès"
            );
        } else {
            $this->flashBag->add(
                "error",
                "Une erreur est survenue lors de la suppression du produit"
            );
        }
    }
}
