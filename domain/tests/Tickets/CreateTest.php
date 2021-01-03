<?php

namespace TYannis\SDS\Domain\Tests\Tickets;

use Assert\AssertionFailedException;
use DateTime;
use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Presenter\CreatePresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\CreateRequest;
use TYannis\SDS\Domain\Tickets\Response\CreateResponse;
use TYannis\SDS\Domain\Tickets\UseCase\Create;
use PHPUnit\Framework\TestCase;

/**
 * Class CreateTest
 * @package TYannis\SDS\Domain\Tests\Tickets
 */
class CreateTest extends TestCase
{

    /**
     * @var CreatePresenterInterface
     */
    private CreatePresenterInterface $presenter;
    /**
     * @var Create
     */
    private Create $useCase;

    public function testSuccessful(): void
    {
        $request = CreateRequest::create('email@email.com', 'Message content', new DateTime(), 'PENDING');

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(CreateResponse::class, $this->presenter->response);
        $this->assertInstanceOf(Ticket::class, $this->presenter->response->getTicket());
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getTicket()->getId());
        $this->assertEquals('email@email.com', $this->presenter->response->getTicket()->getEmail());
        $this->assertEquals('Message content', $this->presenter->response->getTicket()->getMessage());
        $this->assertInstanceOf(DateTimeInterface::class, $this->presenter->response->getTicket()->getSendedAt());
        $this->assertEquals('PENDING', $this->presenter->response->getTicket()->getState());

    }

    /**
     * @dataProvider provideFailedDate
     * @param  string  $email
     * @param  string  $content
     * @param  DateTimeInterface  $sendAt
     * @param  string  $state
     */
    public function testFailed(string $email, string $content, DateTimeInterface $sendAt, string $state)
    {
        $request = CreateRequest::create($email, $content, $sendAt, $state);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return \Generator
     */
    public function provideFailedDate(): \Generator
    {
        yield ['', 'content', new DateTime(), 'PENDING'];
        yield ['S', 'content', new DateTime(), 'RESOLVED'];
        yield ['email@email.com', '', new DateTime(), 'ARCHIVED'];
        yield ['email@email.com', 'c', new DateTime(), 'PENDING'];
        yield ['email@email.com', 'content', new DateTime(), ''];
        yield ['email@email.com', 'content', new DateTime(), 'NSJKQJK'];
    }

    protected function setUp()
    {
        $this->presenter = new class() implements CreatePresenterInterface {
            public CreateResponse $response;

            public function present(CreateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Create();
    }
}
