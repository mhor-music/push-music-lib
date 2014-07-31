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

    public function __construct()
    {
        $this->user = new User();
        $this->user->setFirstname('maxime');
        $this->user->setLastname('horcholle');
        $this->user->setLogin('mhor');
    }

    public function testShowAlbumsWithoutUser()
    {
        $client = static::createClient();
        $client->request('GET', '/albums');
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
        $this->assertEquals($client->getResponse()->getContent(), "userId => ");

    }

    public function testShowTracksWithoutUser()
    {
        $client = static::createClient();
        $client->request('GET', 'album/99999/tracks');
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }

    public function testShowTrackWithoutUser()
    {
        $client = static::createClient();
        $client->request('GET', 'track/99999');
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }

    public function testShowAlbumsWithUser()
    {
        $client = static::createClient();
        $client->request('GET', '/albums/' . $this->user->getLogin());
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
        $this->assertEquals($client->getResponse()->getContent(), "userId => mhor");

    }

    public function testShowTracksWithUser()
    {
        $client = static::createClient();
        $client->request('GET', 'album/99999/tracks/'. $this->user->getLogin());
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }

    public function testShowTrackWithUser()
    {
        $client = static::createClient();
        $client->request('GET', 'track/99999/' . $this->user->getLogin());
        $this->assertEquals($client->getResponse()->getStatusCode(), 404);
    }
}
