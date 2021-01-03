<?php

namespace App\UserInterface\Presenter\Shop\Product;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Shop\Presenter\Product\CreatePresenterInterface;
use TYannis\SDS\Domain\Shop\Response\Product\CreateResponse;

/**
 * Class CreateController
 * @package App\UserInterface\Controller\Shop\Product
 */
class CreatePresenter implements CreatePresenterInterface
{
    /**
     * @var FlashBagInterface
     */
    private FlashBagInterface $flashBag;

    /**
     * CreatePresenter constructor.
     * @param  FlashBagInterface  $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @param  CreateResponse  $response
     */
    public function present(CreateResponse $response): void
    {
        $this->flashBag->add(
            "success",
            "Article ajouté avec succès"
        );
    }
}
