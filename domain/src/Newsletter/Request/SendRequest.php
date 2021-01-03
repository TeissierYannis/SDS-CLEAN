<?php

namespace TYannis\SDS\Domain\Newsletter\Request;

use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class SendRequest
 * @package TYannis\SDS\Domain\Newsletter\Request
 */
class SendRequest
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

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @throws AssertionFailedException
     */
    public function validate()
    {
        Assertion::notBlank($this->object);
        Assertion::minLength($this->object, 3);

        Assertion::notBlank($this->body);
        Assertion::minLength($this->body, 3);

        foreach ($this->emails as $email) {
            Assertion::email($email);
        }
    }
}
