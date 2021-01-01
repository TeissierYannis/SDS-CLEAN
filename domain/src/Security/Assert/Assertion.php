<?php

namespace TYannis\SDS\Domain\Security\Assert;

use Assert\Assertion as BaseAssertion;
use TYannis\SDS\Domain\Security\Exception\NonUniqueEmailException;
use TYannis\SDS\Domain\Security\Exception\NonUniquePseudoException;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class Assertion
 * @package TYannis\SDS\Domain\Security\Assert
 */
class Assertion extends BaseAssertion
{
    public const EXISTING_EMAIL = 500;
    public const EXISTING_PSEUDO = 501;

    /**
     * @param string      $pseudo
     * @param UserGateway $userGateway
     */
    public static function nonUniquePseudo(string $pseudo, UserGateway $userGateway): void
    {
        if (!$userGateway->isPseudoUnique($pseudo)) {
            throw new NonUniquePseudoException("This pseudo should be unique !", self::EXISTING_PSEUDO);
        }
    }

    /**
     * @param string      $email
     * @param UserGateway $userGateway
     */
    public static function nonUniqueEmail(string $email, UserGateway $userGateway): void
    {
        if (!$userGateway->isEmailUnique($email)) {
            throw new NonUniqueEmailException("This email should be unique !", self::EXISTING_EMAIL);
        }
    }
}
