<?php

namespace Mhor\PushMusicLibBundle\Tests\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PushApiControllerTest extends WebTestCase
{
    public function testAuth()
    {
        $client = static::createClient();
        $client->request('POST', '/api/auth');
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
        $this->assertEquals($client->getResponse()->getContent(), "");

    }

    public function testPush()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/push');
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
        $this->assertEquals($client->getResponse()->getContent(), "");
    }
}
