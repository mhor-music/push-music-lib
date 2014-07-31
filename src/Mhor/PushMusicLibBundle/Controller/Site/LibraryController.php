<?php

namespace Mhor\PushMusicLibBundle\Controller\Site;

use Mhor\PushMusicLibBundle\Entity\Music\Album;
use Mhor\PushMusicLibBundle\Entity\Music\Track;
use Mhor\PushMusicLibBundle\Entity\User\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LibraryController
 * @package Mhor\PushMusicLibBundle\Controller\Site
 *
 * @Route("")
 */
class LibraryController  extends Controller
{
    /**
     * @Route("/albums/{userId}", name="user_albums")
     * @Route("/albums", name="personal_albums")
     * @Method("GET")
     */
    public function showAlbumsAction($userId = null)
    {
        return new Response("userId => "  .  $userId);
    }

    /**
     * @Route("/album/{id}/{userId}", name="user_album_tracks")
     * @Route("/album/{id}", name="personal_album_tracks")
     * @Method("GET")
     */
    public function showTracksAction(Album $album, $userId = null)
    {
        return new Response("userId => "  .  $userId);
    }

    /**
     * @Route("track/{id}/{userId}", name="user_album_track")
     * @Route("track/{id}", name="personal_album_track")
     * @Method("GET")
     */
    public function showTrackAction(Track $track, $userId = null)
    {
        return new Response("userId => "  .  $userId);
    }
}
 