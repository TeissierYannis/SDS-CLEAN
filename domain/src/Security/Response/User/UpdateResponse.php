<?php

namespace TYannis\SDS\Domain\Security\Response\User;

use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class UpdateResponse
 * @package TYannis\SDS\Domain\Security\Response\User
 */
class UpdateResponse
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UpdateResponse constructor.
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
