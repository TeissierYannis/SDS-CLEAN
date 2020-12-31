<?php

namespace TYannis\SDS\Domain\Security\Presenter\Role;

use TYannis\SDS\Domain\Security\Response\Role\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\Security\Presenter\Role
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
