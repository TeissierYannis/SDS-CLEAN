<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Category;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Request\Category\ListingRequest;
use TYannis\SDS\Domain\Blog\Response\Category\ListingResponse;
use TYannis\SDS\Domain\Blog\Presenter\Category\ListingPresenterInterface;

/**
 * Class Listing
 * @package TYannis\SDS\Domain\Blog\UseCase\Category
 */
class Listing
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * Listing constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param ListingRequest $request
     * @param ListingPresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $request->validate();

        $countCategories = $this->categoryGateway->countCategories();

        $pages = ceil($countCategories / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages);

        $presenter->present(
            new ListingResponse(
                $this->categoryGateway->getCategories(
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
