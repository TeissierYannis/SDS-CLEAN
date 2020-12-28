<?php

namespace App\UserInterface\Presenter\Category;

use App\UserInterface\ViewModel\Category\ListingViewModel;
use TYannis\SDS\Domain\Blog\Presenter\ListingCategoriesPresenterInterface;
use TYannis\SDS\Domain\Blog\Response\ListingCategoriesResponse;

/**
 * Class ListingPresenter
 * @package App\UserInterface\Presenter\Article
 */
class ListingPresenter implements ListingCategoriesPresenterInterface
{
    /**
     * @var ListingViewModel
     */
    private ListingViewModel $viewModel;

    /**
     * @param ListingCategoriesResponse $response
     */
    public function present(ListingCategoriesResponse $response): void
    {

        $this->viewModel = ListingViewModel::fromResponse($response);
    }

    /**
     * @return ListingViewModel
     */
    public function getViewModel(): ListingViewModel
    {
        return $this->viewModel;
    }
}
