<?php

namespace TYannis\SDS\Domain\Tests\Security;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Presenter\RegistrationPresenterInterface;
use TYannis\SDS\Domain\Security\Request\RegistrationRequest;
use TYannis\SDS\Domain\Security\Response\RegistrationResponse;
use TYannis\SDS\Domain\Security\UseCase\Registration;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\UserRepository;

/**
 * Class RegistrationTest
 *
 * @package TBoileau\CodeChallenge\Domain\Tests\Security
 */
class RegistrationTest extends TestCase
{
    /**
     * @var Registration
     */
    private Registration $useCase;

    /**
     * @var RegistrationPresenterInterface
     */
    private RegistrationPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->presenter = new class () implements RegistrationPresenterInterface {
            public RegistrationResponse $response;

            public function present(RegistrationResponse $response): void
            {
                $this->response = $response;
            }
        };

        $userGateway = new UserRepository();

        $this->useCase = new Registration($userGateway);
    }

    public function testSuccessful(): void
    {
        $request = RegistrationRequest::create(
            "email@email.com",
            "pseudo",
            "password",
            true
        );

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(RegistrationResponse::class, $this->presenter->response);
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getUser()->getId());
        $this->assertEquals("email@email.com", $this->presenter->response->getUser()->getEmail());
        $this->assertEquals("pseudo", $this->presenter->response->getUser()->getPseudo());
        $this->assertTrue(password_verify("password", $this->presenter->response->getUser()->getPassword()));
        $this->assertTrue($this->presenter->response->getUser()->getIsNewsletterRegistered());
    }

    /**
     * @dataProvider provideFailedRequestData
     * @param  string  $email
     * @param  string  $pseudo
     * @param  string  $plainPassword
     * @param  bool  $isNewsletterRegistered
     * @throws AssertionFailedException
     */
    public function testFailedRequest(
        string $email,
        string $pseudo,
        string $plainPassword,
        bool $isNewsletterRegistered
    ): void {
        $request = RegistrationRequest::create($email, $pseudo, $plainPassword, $isNewsletterRegistered);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedRequestData(): Generator
    {
        yield ["", "pseudo", "password", true];
        yield ["email", "pseudo", "password", true];
        yield ["email@email.com", "", "password", true];
        yield ["email@email.com", "pseudo", "", true];
        yield ["email@email.com", "pseudo", "fail", false];
        yield ["used@email.com", "pseudo", "password", false];
        yield ["email@email.com", "used_pseudo", "password", false];
    }
}
