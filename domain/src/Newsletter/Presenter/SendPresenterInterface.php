<?php

namespace TYannis\SDS\Domain\Newsletter\Presenter;

use TYannis\SDS\Domain\Newsletter\Response\SendResponse;

/**
 * Interface SendPresenterInterface
 * @package TYannis\SDS\Domain\Newsletter\Presenter
 */
interface SendPresenterInterface
{
    /**
     * @param SendResponse $response
     */
    public function present(SendResponse $response): void;
}
