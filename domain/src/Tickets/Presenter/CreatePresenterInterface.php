<?php

namespace TYannis\SDS\Domain\Tickets\Presenter;

use TYannis\SDS\Domain\Tickets\Response\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\Tickets\Presenter
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
