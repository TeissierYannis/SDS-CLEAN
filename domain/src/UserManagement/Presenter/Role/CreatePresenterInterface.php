<?php

namespace TYannis\SDS\Domain\UserManagement\Presenter\Role;

use TYannis\SDS\Domain\UserManagement\Response\Role\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\UserManagement\Presenter
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
