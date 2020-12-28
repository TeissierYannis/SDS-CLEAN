<?php

namespace TYannis\SDS\Domain\Security\Presenter;

use TYannis\SDS\Domain\Security\Response\RecoverPasswordResponse;

/**
 * Interface RecoverPasswordPresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter
 */
interface RecoverPasswordPresenterInterface
{
    /**
     * @param RecoverPasswordResponse $response
     */
    public function present(RecoverPasswordResponse $response): void;
}
