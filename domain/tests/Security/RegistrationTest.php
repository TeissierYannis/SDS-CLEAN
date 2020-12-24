<?php

namespace TBoileau\CodeChallenge\Domain\Tests\Security;

use Assert\AssertionFailedException;
use Generator;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;
use TYannis\SDS\Domain\Security\Presenter\RegistrationPresenterInterface;
use TYannis\SDS\Domain\Security\Request\RegistrationRequest;
use TYannis\SDS\Domain\Security\Response\RegistrationResponse;
use TYannis\SDS\Domain\Security\UseCase\Registration;
use PHPUnit\Framework\TestCase;

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

        $userGateway = new class () implements UserGateway {
            public function isEmailUnique(?string $email): bool
            {
                return !in_array($email, ["used@email.com"]);
            }

            public function isPseudoUnique(?string $pseudo): bool
            {
                return !in_array($pseudo, ["used_pseudo"]);
            }

            public function register(User $user): void
            {
            }
        };

        $this->useCase = new Registration($userGateway);
    }

    public function testSuccessful(): void
    {
        $request = RegistrationRequest::create("email@email.com", "pseudo", "password");

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(RegistrationResponse::class, $this->presenter->response);
        $this->assertInstanceOf(UuidInterface::class, $this->presenter->response->getUser()->getId());
        $this->assertEquals("email@email.com", $this->presenter->response->getUser()->getEmail());
        $this->assertEquals("pseudo", $this->presenter->response->getUser()->getPseudo());
        $this->assertTrue(password_verify("password", $this->presenter->response->getUser()->getPassword()));
    }

    /**
     * @dataProvider provideFailedRequestData
     * @param        string $email
     * @param        string $pseudo
     * @param        string $plainPassword
     */
    public function testFailedRequest(string $email, string $pseudo, string $plainPassword): void
    {
        $request = RegistrationRequest::create($email, $pseudo, $plainPassword);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedRequestData(): Generator
    {
        yield ["", "pseudo", "password"];
        yield ["email", "pseudo", "password"];
        yield ["email@email.com", "", "password"];
        yield ["email@email.com", "pseudo", ""];
        yield ["email@email.com", "pseudo", "fail"];
        yield ["used@email.com", "pseudo", "password"];
        yield ["email@email.com", "used_pseudo", "password"];
    }
}
