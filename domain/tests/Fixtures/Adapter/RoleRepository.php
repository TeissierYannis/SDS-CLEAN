<?php

namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;

use TYannis\SDS\Domain\Security\Entity\Role;
use TYannis\SDS\Domain\Security\Gateway\RoleGateway;

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

    /**
     * @param  string  $name
     * @return bool
     */
    public function isRoleUnique(string $name): bool
    {
        return !in_array($name, ["ROLE_USED"]);
    }
}
