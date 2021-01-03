<?php

namespace App\UserInterface\Presenter\Ticket;

use App\UserInterface\ViewModel\Ticket\ListingViewModel;
use TYannis\SDS\Domain\Tickets\Presenter\ListingPresenterInterface;
use TYannis\SDS\Domain\Tickets\Response\ListingResponse;

/**
 * Class ListingPresenter
 * @package App\UserInterface\Presenter\Ticket
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
