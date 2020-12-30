<?php

namespace TYannis\SDS\Domain\Security\Presenter;

use TYannis\SDS\Domain\Security\Response\RegistrationResponse;

/**
 * Interface RegistrationPresenterInterface
 *
 * @package TYannis\SDS\Domain\Security\Presenter
 */
interface RegistrationPresenterInterface
{
    /**
     * @param RegistrationResponse $response
     */
    public function present(RegistrationResponse $response): void;
}
