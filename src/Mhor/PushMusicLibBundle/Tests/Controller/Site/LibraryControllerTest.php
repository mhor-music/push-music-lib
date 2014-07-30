<?php

namespace Mhor\PushMusicLibBundle\Tests\Controller\Site;

use Mhor\PushMusicLibBundle\Entity\User\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LibraryControllerTest extends WebTestCase
{
    /**
     * @var User
     */
    protected $user;

    public function testShowAlbums()
    {
        $client = static::createClient();
        $client->request('GET', '/albums');
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
        $this->assertEquals($client->getResponse()->getContent(), "");

    }

    public function testShowTracks()
    {
        $client = static::createClient();
        $client->request('GET', 'album/99999/tracks');
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }

    public function testShowTrack()
    {
        $client = static::createClient();
        $client->request('GET', 'track/99999');
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }
}
