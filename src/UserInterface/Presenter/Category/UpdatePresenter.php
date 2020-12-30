<?php

namespace App\UserInterface\Presenter\Category;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\Category\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\Category\UpdateResponse;

/**
 * Class UpdatePresenter
 * @package App\UserInterface\Presenter\Article
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
            "Catégorie modifié avec succès"
        );
    }
}
