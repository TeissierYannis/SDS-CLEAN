<?php

namespace TYannis\SDS\Domain\Newsletter\Provider;

interface MailProviderInterface
{
    /**
     * @param  string  $object
     * @param  string  $body
     * @param  array  $emails
     */
    public function sendNewsletter(string $object, string $body, array $emails): void;
}
