<?php


namespace TYannis\SDS\Domain\UserManagement\Gateway;

/**
 * Interface RoleGateway
 * @package TYannis\SDS\Domain\UserManagement\Gateway
 */
interface RoleGateway
{
    /**
     * @return array
     */
    public function getRoles(): array;
}