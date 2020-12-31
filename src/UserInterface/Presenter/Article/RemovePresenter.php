<?php

namespace App\UserInterface\Presenter\Article;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\Article\RemovePresenterInterface;
use TYannis\SDS\Domain\Blog\Response\Article\RemoveResponse;

/**
 * Class UpdatePresenter
 * @package App\UserInterface\Presenter\Article
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
        if (is_null($response->getArticle())) {
            $this->flashBag->add(
                "success",
                "Article supprimé avec succès"
            );
        } else {
            $this->flashBag->add(
                "error",
                "Une erreur est survenue lors de la suppression de l'article"
            );
        }
    }
}
