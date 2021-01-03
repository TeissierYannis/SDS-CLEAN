<?php

namespace TYannis\SDS\Domain\Tickets\Presenter;

use TYannis\SDS\Domain\Tickets\Response\ReplyResponse;

/**
 * Interface ReplyPresenterInterface
 * @package TYannis\SDS\Domain\Tickets\Presenter
 */
interface ReplyPresenterInterface
{
    /**
     * @param ReplyResponse $response
     */
    public function present(ReplyResponse $response): void;
}
