<?php

namespace TYannis\SDS\Domain\Shop\UseCase\Product;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;
use TYannis\SDS\Domain\Shop\Presenter\Product\CreatePresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\CreateRequest;
use TYannis\SDS\Domain\Shop\Response\Product\CreateResponse;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Shop\UseCase\Product
 */
class Create
{
    /**
     * @var ProductGateway
     */
    private ProductGateway $productGateway;

    /**
     * Create constructor.
     * @param  ProductGateway  $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    /**
     * @param  CreateRequest  $request
     * @param  CreatePresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate();

        $product = Product::create(
            $request->getName(),
            $request->getDescription(),
            $request->getPrice(),
            $request->getImage()
        );

        $this->productGateway->create($product);

        $presenter->present(new CreateResponse($product));
    }
}
