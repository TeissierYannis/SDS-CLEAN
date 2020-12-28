<?php

namespace TYannis\SDS\Domain\Blog\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Request\UpdateCategoryRequest;
use TYannis\SDS\Domain\Blog\Response\UpdateCategoryResponse;
use TYannis\SDS\Domain\Blog\Presenter\UpdateCategoryPresenterInterface;

/**
 * Class UpdateCategory
 * @package TYannis\SDS\Domain\Blog\UseCase
 */
class UpdateCategory
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * UpdateCategory constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param UpdateCategoryPresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateCategoryRequest $request, UpdateCategoryPresenterInterface $presenter)
    {
        $request->validate();

        $category = $this->categoryGateway->getCategoryById($request->getId());

        $category->setTitle($request->getTitle());

        $this->categoryGateway->update($category);

        $presenter->present(new UpdateCategoryResponse($category));
    }
}
