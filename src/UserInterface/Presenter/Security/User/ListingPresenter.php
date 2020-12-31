<?php

namespace App\UserInterface\Presenter\Security\User;

use App\UserInterface\ViewModel\Security\User\ListingViewModel;
use TYannis\SDS\Domain\Security\Presenter\User\ListingPresenterInterface;
use TYannis\SDS\Domain\Security\Response\User\ListingResponse;

/**
 * Class ListingPresenter
 * @package App\UserInterface\Presenter\Security\User
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
