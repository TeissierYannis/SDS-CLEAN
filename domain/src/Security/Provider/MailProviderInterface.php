<?php

namespace TYannis\SDS\Domain\Security\Provider;

interface MailProviderInterface
{
    public function sendPasswordResetLink(string $email, string $pseudo, string $link): void;
}
