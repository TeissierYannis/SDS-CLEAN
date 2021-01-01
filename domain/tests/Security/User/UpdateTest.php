<?php

namespace TYannis\SDS\Domain\Tests\Security\User;

use Assert\AssertionFailedException;
use Generator;
use Ramsey\Uuid\Uuid;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Presenter\User\UpdatePresenterInterface;
use TYannis\SDS\Domain\Security\Request\User\UpdateRequest;
use TYannis\SDS\Domain\Security\Response\User\UpdateResponse;
use TYannis\SDS\Domain\Security\UseCase\User\Update;
use PHPUnit\Framework\TestCase;
use TYannis\SDS\Domain\Tests\Fixtures\Adapter\UserRepository;

/**
 * Class UpdateTest
 * @package TYannis\SDS\Domain\Tests\Security\User
 */
class UpdateTest extends TestCase
{
    /**
     * @var UpdatePresenterInterface
     */
    private UpdatePresenterInterface $presenter;
    /**
     * @var Update
     */
    private Update $useCase;

    protected function setUp(): void
    {
        $this->presenter = new class() implements UpdatePresenterInterface {
            public UpdateResponse $response;

            public function present(UpdateResponse $response): void
            {
                $this->response = $response;
            }
        };

        $this->useCase = new Update(new UserRepository());
    }

    /**
     * @throws AssertionFailedException
     */
    public function testSuccessful(): void
    {
        $user = new User(
            Uuid::uuid4(),
            'used@email.com',
            'used_pseudo',
            'password',
            false,
            ['ROLE_USER']
        );

        $request = UpdateRequest::create($user, 'new_used@email.com', 'new_used_pseudo', true, ['ROLE_REDACTOR']);

        $this->useCase->execute($request, $this->presenter);

        $this->assertInstanceOf(UpdateResponse::class, $this->presenter->response);
        $this->assertInstanceOf(User::class, $this->presenter->response->getUser());

        $this->assertEquals('new_used@email.com', $this->presenter->response->getUser()->getEmail());
        $this->assertEquals('new_used_pseudo', $this->presenter->response->getUser()->getPseudo());
        $this->assertTrue($this->presenter->response->getUser()->getIsNewsletterRegistered());
        $this->assertContains('ROLE_REDACTOR', $this->presenter->response->getUser()->getRoles());
    }

    /**
     * @dataProvider provideFailedData
     * @param  string|null  $email
     * @param  string|null  $pseudo
     * @param  bool|null  $newsletter
     * @param  array|null  $roles
     * @throws AssertionFailedException
     */
    public function testFailed(?string $email, ?string $pseudo, ?bool $newsletter, ?array $roles): void
    {
        $user = new User(
            Uuid::uuid4(),
            'used@email.com',
            'used_pseudo',
            'password',
            false,
            ['ROLE_USER']
        );

        $request = new UpdateRequest($user, $email, $pseudo, $newsletter, $roles);

        $this->expectException(AssertionFailedException::class);

        $this->useCase->execute($request, $this->presenter);
    }

    public function provideFailedData(): Generator
    {
        yield ['', null, null, null];
        yield [null, '', null, null];
        yield [null, null, '', null];
        yield [null, null, null, ['']];
    }

}
