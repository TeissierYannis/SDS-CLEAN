<?php

namespace App\UserInterface\Presenter\Category;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\Category\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\Category\CreateResponse;

/**
 * Class CreatePresenter
 * @package App\UserInterface\Presenter\Article
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
            "Catégorie ajouté avec succès"
        );
    }
}
