<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Category;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Presenter\Category\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Category\UpdateRequest;
use TYannis\SDS\Domain\Blog\Response\Category\UpdateResponse;

/**
 * Class Update
 * @package TYannis\SDS\Domain\Blog\UseCase\Category
 */
class Update
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * Update constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param UpdateRequest $request
     * @param UpdatePresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRequest $request, UpdatePresenterInterface $presenter)
    {
        $request->validate();

        $category = $this->categoryGateway->getCategoryById($request->getId());

        $category->setTitle($request->getTitle());

        $this->categoryGateway->update($category);

        $presenter->present(new UpdateResponse($category));
    }
}
