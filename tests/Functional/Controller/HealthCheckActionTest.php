<?php

namespace App\Tests\Functional\Controller;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class HealthCheckActionTest extends WebTestCase
{
    public function test_request_responded_successful_result(): void
    {
        $client = static::createClient();
        $client->request(method: Request::METHOD_GET, uri: '/health-check');

        $this->assertResponseIsSuccessful();
        $jsonResult = json_decode($client->getResponse()->getContent(), associative: true);
        $this->assertEquals($jsonResult['status'], actual: 'ok');
    }
}
