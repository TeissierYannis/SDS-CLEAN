<?php

namespace App\Infrastructure\Test\Adapter;

use TYannis\SDS\Domain\Security\Provider\MailProviderInterface;

class MailProvider implements MailProviderInterface
{
    public function sendPasswordResetLink(string $email, string $pseudo, string $link): void
    {
    }
}
