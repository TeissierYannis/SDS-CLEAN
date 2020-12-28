<?php

namespace TYannis\SDS\Domain\Security\Presenter;

use TYannis\SDS\Domain\Security\Response\AskPasswordResetResponse;

/**
 * Interface AskPasswordResetPresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter
 */
interface AskPasswordResetPresenterInterface
{
    /**
     * @param AskPasswordResetResponse $response
     */
    public function present(AskPasswordResetResponse $response): void;
}
