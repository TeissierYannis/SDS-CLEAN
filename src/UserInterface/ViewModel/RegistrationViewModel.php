<?php

namespace App\UserInterface\ViewModel;

use TYannis\SDS\Domain\Security\Entity\User;

/**
 * Class RegistrationViewModel
 * @package App\UserInterface\ViewModel
 */
class RegistrationViewModel
{
    /**
     * @var User
     */
    private User $user;

    /**
     * RegistrationViewModel constructor.
     * @param User $user
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
