<?php

namespace TYannis\SDS\Domain\Tickets\UseCase;

use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\CreateRequest;
use TYannis\SDS\Domain\Tickets\Response\CreateResponse;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Tickets\UseCase
 */
class Create
{
    /**
     * @param  CreateRequest  $request
     * @param  CreatePresenterInterface  $presenter
     * @throws \Assert\AssertionFailedException
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate();

        $ticket = Ticket::fromCreate($request);

        $presenter->present(new CreateResponse($ticket));
    }
}
