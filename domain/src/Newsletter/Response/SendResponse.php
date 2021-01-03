<?php

namespace TYannis\SDS\Domain\Newsletter\Response;

/**
 * Class SendResponse
 * @package TYannis\SDS\Domain\Newsletter\Response
 */
class SendResponse
{
    /**
     * @var string
     */
    private string $object;
    /**
     * @var string
     */
    private string $body;
    /**
     * @var array
     */
    private array $emails;

    /**
     * SendRequest constructor.
     * @param  string  $object
     * @param  string  $body
     * @param  array  $emails
     */
    public function __construct(string $object, string $body, array $emails)
    {
        $this->object = $object;
        $this->body = $body;
        $this->emails = $emails;
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getEmails(): array
    {
        return $this->emails;
    }
}
