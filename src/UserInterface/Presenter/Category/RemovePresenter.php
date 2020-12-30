<?php

namespace App\UserInterface\Presenter\Category;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\Category\RemovePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\Category\RemoveResponse;

/**
 * Class UpdatePresenter
 * @package App\UserInterface\Presenter\Category
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
        if (is_null($response->getCategory())) {
            $this->flashBag->add(
                "success",
                "Catégorie supprimé avec succès"
            );
        } else {
            $this->flashBag->add(
                "error",
                "Impossible de supprimer la catégorie."
            );
        }
    }
}
