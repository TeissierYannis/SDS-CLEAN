<?php

namespace TYannis\SDS\Domain\Blog\UseCase;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Request\ListingCategoriesRequest;
use TYannis\SDS\Domain\Blog\Response\ListingCategoriesResponse;
use TYannis\SDS\Domain\Blog\Presenter\ListingCategoriesPresenterInterface;

/**
 * Class ListingCategories
 * @package TYannis\SDS\Domain\Blog\UseCase
 */
class ListingCategories
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * ListingCategories constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param ListingCategoriesRequest $request
     * @param ListingCategoriesPresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingCategoriesRequest $request, ListingCategoriesPresenterInterface $presenter)
    {
        $request->validate();

        $countCategories = $this->categoryGateway->countCategories();

        $pages = ceil($countCategories / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages);

        $presenter->present(
            new ListingCategoriesResponse(
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
