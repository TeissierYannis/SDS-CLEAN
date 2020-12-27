<?php

namespace TYannis\SDS\Domain\Blog\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Presenter\CreateCategoryPresenterInterface;
use TYannis\SDS\Domain\Blog\Request\CreateCategoryRequest;
use TYannis\SDS\Domain\Blog\Response\CreateCategoryResponse;

/**
 * Class CreateCategory
 * @package TYannis\SDS\Domain\Blog\UseCase
 */
class CreateCategory
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * CreateCategory constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param CreateCategoryRequest $request
     * @param CreateCategoryPresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(CreateCategoryRequest $request, CreateCategoryPresenterInterface $presenter)
    {
        $request->validate();

        $category = Category::create($request->getTitle());

        $this->categoryGateway->create($category);

        $presenter->present(new CreateCategoryResponse($category));
    }
}
