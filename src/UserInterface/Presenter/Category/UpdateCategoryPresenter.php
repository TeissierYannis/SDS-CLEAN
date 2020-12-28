<?php

namespace App\UserInterface\Presenter\Category;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\UpdateCategoryPresenterInterface;
use TYannis\SDS\Domain\Blog\Presenter\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\CreateCategoryResponse;
use TYannis\SDS\Domain\Blog\Response\UpdateCategoryResponse;

/**
 * Class UpdateCategoryPresenter
 * @package App\UserInterface\Presenter\Article
 */
class UpdateCategoryPresenter implements UpdateCategoryPresenterInterface
{
    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * CreateCategoryPresenter constructor.
     * @param FlashBagInterface $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @param UpdateCategoryResponse $response
     */
    public function present(UpdateCategoryResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Catégorie modifié avec succès"
        );
    }
}
