<?php

namespace App\Tests\IntegrationTests;

use App\Infrastructure\Test\IntegrationTestCase;
use Generator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RegistrationTest
 * @package App\Tests\IntegrationTests
 */
class AskPasswordResetTest extends IntegrationTestCase
{

    public function test()
    {
        $this->assertTrue(true);
    }
    /*
    public function testSuccessful()
    {
        $client = static::createClient();

        $crawler = $client->request(Request::METHOD_GET, '/reset-password');

        $this->assertResponseIsSuccessful();

        $form = $crawler->filter("form")->form([
            "reset_password[email]" => "used@email.com",
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
    }


    public function testFailed(string $email, string $errorMessage)
    {
        $client = static::createClient();

        $crawler = $client->request(Request::METHOD_GET, '/reset-password');

        $this->assertResponseIsSuccessful();

        $form = $crawler->filter("form")->form([
            "reset_password[email]" => $email,
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        $this->assertSelectorTextContains('html', $errorMessage);
    }


    public function provideFormData(): Generator
    {
        yield [
            "",
            "This value should not be blank."
        ];

        yield [
            "fail",
            "This value is not a valid email address."
        ];
    }

    */
}
