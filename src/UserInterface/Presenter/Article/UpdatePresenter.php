<?php

namespace App\UserInterface\Presenter\Article;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Presenter\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\CreateResponse;
use TYannis\SDS\Domain\Blog\Response\UpdateResponse;

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
            "Article modifié avec succès"
        );
    }
}
