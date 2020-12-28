<?php

namespace App\UserInterface\Presenter\Article;

use App\UserInterface\ViewModel\Article\ListingViewModel;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use TYannis\SDS\Domain\Blog\Presenter\ListingPresenterInterface;
use TYannis\SDS\Domain\Blog\Response\CreateResponse;
use TYannis\SDS\Domain\Blog\Response\ListingResponse;

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