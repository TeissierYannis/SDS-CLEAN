<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Category;

use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;
use TYannis\SDS\Domain\Blog\Request\Category\RemoveRequest;
use TYannis\SDS\Domain\Blog\Response\Category\RemoveResponse;
use TYannis\SDS\Domain\Blog\Presenter\Category\RemovePresenterInterface;

/**
 * Class Remove
 * @package TYannis\SDS\Domain\Blog\UseCase\Category
 */
class Remove
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * Remove constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }

    /**
     * @param RemoveRequest $request
     * @param RemovePresenterInterface $presenter
     */
    public function execute(RemoveRequest $request, RemovePresenterInterface $presenter)
    {
        $category = new Category(
            $request->getId(),
            $request->getTitle()
        );

        if ($this->categoryGateway->remove($category)) {
            $category = null;
        }

        $presenter->present(new RemoveResponse($category));
    }
}
