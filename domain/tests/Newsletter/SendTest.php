<?php

namespace TYannis\SDS\Domain\Tests\Newsletter;

use Assert\AssertionFailedException;
use Generator;
use TYannis\SDS\Domain\Newsletter\Presenter\SendPresenterInterface;
use TYannis\SDS\Domain\Newsletter\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Newsletter\Request\SendRequest;
use TYannis\SDS\Domain\Newsletter\Response\SendResponse;
use TYannis\SDS\Domain\Newsletter\UseCase\Send;
use PHPUnit\Framework\TestCase;

/**
 * Class SendTest
 * @package TYannis\SDS\Domain\Tests\Newsletter
 */
class SendTest extends TestCase
{
    /**
     * @var SendPresenterInterface
     */
    private SendPresenterInterface $presenter;
    /**
     * @var Send
     */
    private Send $useCase;

    public function testSuccessful(): void
    {
        $request = new SendRequest('Object', 'Body', ['used@email.com', 'email@email.com']);

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(SendResponse::class, $this->presenter->response);
        $this->assertEquals('Object', $this->presenter->response->getObject());
        $this->assertEquals('Body', $this->presenter->response->getBody());

        foreach ($this->presenter->response->getEmails() as $email) {
            $this->assertStringContainsString('@', $email);
        }
    }

    /**
     * @dataProvider provideFailedData
     * @param  string  $object
     * @param  string  $body
     * @param  array  $emails
     */
    public function testFailed(string $object, string $body, array $emails)
    {
        $request = new SendRequest($object, $body, $emails);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedData(): Generator
    {
        yield ['', 'body', ['email@email.com']];
        yield ['Object', '', ['email@email.com', 'email@email.com']];
        yield ['Object', 'body', ['emailemail.com']];
        yield ['Object', 'body', ['']];
    }

    protected function setUp()
    {
        $this->presenter = new class() implements SendPresenterInterface {
            public SendResponse $response;

            public function present(SendResponse $response): void
            {
                $this->response = $response;
            }
        };

        $mailer = new  class () implements MailProviderInterface {
            public function sendNewsletter(string $object, string $body, array $emails): void
            {
            }
        };

        $this->useCase = new Send($mailer);
    }
}
