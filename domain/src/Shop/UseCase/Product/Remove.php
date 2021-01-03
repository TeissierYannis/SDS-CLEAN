<?php

namespace TYannis\SDS\Domain\Shop\UseCase\Product;


use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;
use TYannis\SDS\Domain\Shop\Presenter\Product\RemovePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\RemoveRequest;
use TYannis\SDS\Domain\Shop\Response\Product\RemoveResponse;

/**
 * Class Remove
 * @package TYannis\SDS\Domain\Shop\UseCase\Product
 */
class Remove
{
    /**
     * @var ProductGateway
     */
    private ProductGateway $productGateway;

    /**
     * Remove constructor.
     * @param ProductGateway $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    /**
     * @param RemoveRequest $request
     * @param RemovePresenterInterface $presenter
     */
    public function execute(RemoveRequest $request, RemovePresenterInterface $presenter)
    {
        $article = new Product(
            $request->getId(),
            $request->getName(),
            $request->getDescription(),
            $request->getPrice(),
            $request->getImage()
        );

        if ($this->productGateway->remove($article)) {
            $article = null;
        }

        $presenter->present(new RemoveResponse($article));
    }
}
