<?php

namespace App\UserInterface\Presenter\Shop\Product;

use App\UserInterface\ViewModel\Shop\Product\ListingViewModel;
use TYannis\SDS\Domain\Shop\Presenter\Product\ListingPresenterInterface;
use TYannis\SDS\Domain\Shop\Response\Product\ListingResponse;

/**
 * Class ListingPresenter
 * @package App\UserInterface\Presenter\Shop\Product
 */
class ListingPresenter implements ListingPresenterInterface
{
    /**
     * @var ListingViewModel
     */
    private ListingViewModel $viewModel;

    /**
     * @param  ListingResponse  $response
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
