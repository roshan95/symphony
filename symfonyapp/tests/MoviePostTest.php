<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MoviePostTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient([], [
            'HTTP_HOST' => '127.0.0.1:8000',
        ]);
        // enables the profiler for the very next request


        $crawler = $client->request('GET', '/movies');
        $this->assertResponseIsSuccessful();

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // $this->assertCount(1, $crawler->filter('.roshan'));
    }
}
