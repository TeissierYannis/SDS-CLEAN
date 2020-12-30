<?php


namespace TYannis\SDS\Domain\Tests\Fixtures\Adapter;


class RoleRepository implements \TYannis\SDS\Domain\UserManagement\Gateway\RoleGateway
{

    /**
     * @inheritDoc
     */
    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_ADMIN'];
    }
}