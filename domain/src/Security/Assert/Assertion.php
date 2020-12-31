<?php

namespace TYannis\SDS\Domain\Security\Assert;

use Assert\Assertion as BaseAssertion;
use TYannis\SDS\Domain\Security\Exception\NonUniqueRoleException;
use TYannis\SDS\Domain\Security\Gateway\RoleGateway;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class Assertion
 * @package TYannis\SDS\Domain\Security\Assert
 */
class Assertion extends BaseAssertion
{
    public const EXISTING_EMAIL = 500;
    public const EXISTING_PSEUDO = 501;
    public const EXISTING_ROLE = 502;

    /**
     * @param string      $pseudo
     * @param UserGateway $userGateway
     */
    public static function nonUniquePseudo(string $pseudo, UserGateway $userGateway): void
    {
        if (!$userGateway->isPseudoUnique($pseudo)) {
            throw new NonUniqueRoleException("This email should be unique !", self::EXISTING_PSEUDO);
        }
    }

    /**
     * @param string      $email
     * @param UserGateway $userGateway
     */
    public static function nonUniqueEmail(string $email, UserGateway $userGateway): void
    {
        if (!$userGateway->isEmailUnique($email)) {
            throw new NonUniqueRoleException("This email should be unique !", self::EXISTING_EMAIL);
        }
    }

    /**
     * @param  string  $name
     * @param  RoleGateway  $roleGateway
     */
    public static function nonUniqueRole(string $name, RoleGateway $roleGateway): void
    {
        if (!$roleGateway->isRoleUnique($name)) {
            throw new NonUniqueRoleException("This role should be unique !", self::EXISTING_ROLE);
        }
    }
}
