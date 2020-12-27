<?php

namespace App\UserInterface\Presenter\Category;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\CreateCategoryPresenterInterface;
use TYannis\SDS\Domain\Blog\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\CreateCategoryResponse;
use TYannis\SDS\Domain\Blog\Response\CreateResponse;

/**
 * Class CreatePresenter
 * @package App\UserInterface\Presenter\Article
 */
class CreateCategoryPresenter implements CreateCategoryPresenterInterface
{
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
     * @param CreateCategoryResponse $response
     */
    public function present(CreateCategoryResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Catégorie ajouté avec succès"
        );
    }
}
