<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Category;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Presenter\Category\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Category\CreateRequest;
use TYannis\SDS\Domain\Blog\Response\Category\CreateResponse;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Blog\UseCase\Category
 */
class Create
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * Create constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param CreateRequest $request
     * @param CreatePresenterInterface $presenter
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate();

        $category = Category::create($request->getTitle());

        $this->categoryGateway->create($category);

        $presenter->present(new CreateResponse($category));
    }
}
