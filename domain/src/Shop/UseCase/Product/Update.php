<?php

namespace TYannis\SDS\Domain\Shop\UseCase\Product;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;
use TYannis\SDS\Domain\Shop\Presenter\Product\UpdatePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\UpdateRequest;
use TYannis\SDS\Domain\Shop\Response\Product\UpdateResponse;

/**
 * Class Update
 * @package TYannis\SDS\Domain\Shop\UseCase\Product
 */
class Update
{
    /**
     * @var ProductGateway
     */
    private ProductGateway $productGateway;

    /**
     * Update constructor.
     * @param  ProductGateway  $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    /**
     * @param  UpdateRequest  $request
     * @param  UpdatePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRequest $request, UpdatePresenterInterface $presenter)
    {
        $request->validate();

        $product = $this->productGateway->getProductById($request->getId());

        $product->setName($request->getName());
        $product->setDescription($request->getDescription());
        $product->setPrice($request->getPrice());
        $product->setImage($request->getImage());

        $this->productGateway->update($product);

        $presenter->present(new UpdateResponse($product));
    }
}
