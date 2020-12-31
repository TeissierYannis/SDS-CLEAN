<?php

namespace TYannis\SDS\Domain\Security\Presenter;

use TYannis\SDS\Domain\Security\Response\LoginResponse;

/**
 * Interface LoginPresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter
 */
interface LoginPresenterInterface
{
    /**
     * @param LoginResponse $response
     */
    public function present(LoginResponse $response): void;
}
