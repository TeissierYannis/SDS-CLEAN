<?php

namespace TYannis\SDS\Domain\Security\UseCase\User;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Request\User\ListingRequest;
use TYannis\SDS\Domain\Security\Response\User\ListingResponse;
use TYannis\SDS\Domain\Security\Presenter\User\ListingPresenterInterface;

/**
 * Class Listing
 * @package TYannis\SDS\Domain\Security\UseCase
 */
class Listing
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * Listing constructor.
     * @param  UserGateway  $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @param  ListingRequest  $request
     * @param  ListingPresenterInterface  $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $request->validate();

        $countArticle = $this->userGateway->countUsers();

        $pages = ceil($countArticle / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages === 0 ? $pages : 1);

        $presenter->present(
            new ListingResponse(
                $this->userGateway->getUsers(
                    $request->getPage(),
                    $request->getLimit(),
                    $request->getField(),
                    $request->getOrder()
                ),
                $request->getPage(),
                $pages,
                $request->getLimit(),
                $request->getField(),
                $request->getOrder()
            )
        );
    }
}
