<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use TYannis\SDS\Domain\UserManagement\Entity\Role;
use TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway;

class RoleRepository implements RoleGateway
{

    /**
     * @inheritDoc
     */
    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_ADMIN', 'ROLE_TEST'];
    }

    public function create(Role $role): void
    {
    }
}
