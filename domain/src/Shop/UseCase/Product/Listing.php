<?php

namespace TYannis\SDS\Domain\Shop\UseCase\Product;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;
use TYannis\SDS\Domain\Shop\Presenter\Product\ListingPresenterInterface;
use TYannis\SDS\Domain\Shop\Request\Product\ListingRequest;
use TYannis\SDS\Domain\Shop\Response\Product\ListingResponse;

/**
 * Class Listing
 * @package TYannis\SDS\Domain\Shop\UseCase\Product
 */
class Listing
{
    /**
     * @var ProductGateway
     */
    private ProductGateway $productGateway;

    /**
     * Listing constructor.
     * @param  ProductGateway  $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    /**
     * @param  ListingRequest  $request
     * @param  ListingPresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $request->validate();

        $countProducts = $this->productGateway->countProducts();

        $pages = ceil($countProducts / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages === 0 ? 1 : $pages);

        $presenter->present(
            new ListingResponse(
                $this->productGateway->getProducts(
                    $request->getPage(),
                    $request->getLimit(),
                    $request->getField(),
                    $request->getOrder()
                ),
                $request->getPage(),
                $pages,
                $request->getLimit(),
                $request->getField(),
                $request->getOrder()
            )
        );
    }
}
