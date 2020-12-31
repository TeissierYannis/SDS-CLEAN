<?php

namespace App\Infrastructure\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class NonUniquePseudoValidator
 * @package App\Infrastructure\Validator
 */
class NonUniquePseudoValidator extends ConstraintValidator
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * NonUniquePseudoValidator constructor.
     * @param UserGateway $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @inheritDoc
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$this->userGateway->isPseudoUnique($value)) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }
}
