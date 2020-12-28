<?php

namespace App\UserInterface\Presenter\Category;

use App\UserInterface\ViewModel\Category\ListingViewModel;
use TYannis\SDS\Domain\Blog\Presenter\Category\ListingPresenterInterface;
use TYannis\SDS\Domain\Blog\Response\Category\ListingResponse;

/**
 * Class ListingPresenter
 * @package App\UserInterface\Presenter\Article
 */
class ListingPresenter implements ListingPresenterInterface
{
    /**
     * @var ListingViewModel
     */
    private ListingViewModel $viewModel;

    /**
     * @param ListingResponse $response
     */
    public function present(ListingResponse $response): void
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
