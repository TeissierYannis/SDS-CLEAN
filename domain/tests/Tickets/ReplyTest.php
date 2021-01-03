<?php

namespace TYannis\SDS\Domain\Tests\Tickets;

use App\Infrastructure\Test\Adapter\MailProvider;
use Assert\AssertionFailedException;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\TicketRepository;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Presenter\ReplyPresenterInterface;
use TYannis\SDS\Domain\Tickets\Request\ReplyRequest;
use TYannis\SDS\Domain\Tickets\Response\ReplyResponse;
use TYannis\SDS\Domain\Tickets\UseCase\Reply;
use PHPUnit\Framework\TestCase;

/**
 * Class ReplyTest
 * @package TYannis\SDS\Domain\Tests\Tickets
 */
class ReplyTest extends TestCase
{
    /**
     * @var ReplyPresenterInterface
     */
    private ReplyPresenterInterface $presenter;
    /**
     * @var Reply
     */
    private Reply $useCase;

    public function testSuccessfuly(): void
    {
        $ticket = new Ticket(Uuid::uuid4(), 'email@email.com', 'question', new \DateTime(), 'PENDING');
        $request = new ReplyRequest($ticket, 'pseudo', 'message');

        $this->assertEquals('PENDING', $ticket->getState());

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(ReplyResponse::class, $this->presenter->response);
        $this->assertInstanceOf(Ticket::class, $this->presenter->response->getTicket());
        $this->assertEquals('pseudo', $this->presenter->response->getPseudo());
        $this->assertEquals('message', $this->presenter->response->getMessage());
        $this->assertEquals('RESOLVED', $this->presenter->response->getTicket()->getState());
    }

    /**
     * @dataProvider provideFailedDate
     * @param  string  $pseudo
     * @param  string  $message
     * @throws \Assert\AssertionFailedException
     */
    public function testFailed(string $pseudo, string $message)
    {
        $ticket = new Ticket(Uuid::uuid4(), 'email@email.com', 'question', new \DateTime(), 'PENDING');
        $request = new ReplyRequest($ticket, $pseudo, $message);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return \Generator
     */
    public function provideFailedDate(): \Generator
    {
        yield ['', 'message'];
        yield ['pseudo', ''];
    }

    protected function setUp()
    {
        $this->presenter = new class () implements ReplyPresenterInterface {
            public ReplyResponse $response;

            public function present(ReplyResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Reply(new TicketRepository(), new MailProvider());
    }
}
