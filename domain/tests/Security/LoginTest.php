<?php

namespace TYannis\SDS\Domain\Tests\Security;

use Assert\AssertionFailedException;
use Generator;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Presenter\LoginPresenterInterface;
use TYannis\SDS\Domain\Security\Request\LoginRequest;
use TYannis\SDS\Domain\Security\Response\LoginResponse;
use TYannis\SDS\Domain\Security\UseCase\Login;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\UserRepository;

/**
 * Class LoginTest
 * @package TYannis\SDS\Domain\Tests\Security
 */
class LoginTest extends TestCase
{

    /**
     * @var Login
     */
    private Login $useCase;
    /**
     * @var LoginPresenterInterface
     */
    private LoginPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->presenter = new class () implements LoginPresenterInterface {
            public LoginResponse $response;

            public function present(LoginResponse $response): void
            {
                $this->response = $response;
            }
        };

        $userGateway = new UserRepository();

        $this->useCase = new Login($userGateway);
    }

    public function testSuccessful(): void
    {
        $request = LoginRequest::create('used@email.com', 'password');
        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(LoginResponse::class, $this->presenter->response);
        $this->assertInstanceOf(User::class, $this->presenter->response->getUser());
        $this->assertTrue($this->presenter->response->isPasswordValid());
    }

    public function testIfEmailNotFound()
    {
        $request = LoginRequest::create('unknow@email.com', 'password');
        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(LoginResponse::class, $this->presenter->response);
        $this->assertNull($this->presenter->response->getUser());
    }

    public function testIfPasswordInvalid()
    {
        $request = LoginRequest::create('used@email.com', 'fail');
        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(LoginResponse::class, $this->presenter->response);
        $this->assertInstanceOf(User::class, $this->presenter->response->getUser());
        $this->assertFalse($this->presenter->response->isPasswordValid());
    }

    /**
     * @dataProvider provideFailedRequestData
     * @param string $email
     * @param string $password
     */
    public function testFailedRequest(string $email, string $password)
    {
        $request = LoginRequest::create($email, $password);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    /**
     * @return Generator
     */
    public function provideFailedRequestData(): Generator
    {
        yield ['', 'password'];
        yield ['email@email.com', ''];
    }
}
