<?php

namespace Mhor\PushMusicLibBundle\Controller\Site;

use Mhor\PushMusicLibBundle\Entity\Music\Album;
use Mhor\PushMusicLibBundle\Entity\Music\Track;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
     * @Route("/albums", name="albums")
     * @Method("GET")
     */
    public function showAlbumsAction()
    {
        return new Response();
    }

    /**
     * @Route("/album/{id}", name="album_tracks")
     * @Method("GET")
     */
    public function showTracksAction(Album $album)
    {
        return new Response();
    }

    /**
     * @Route("track/{id}", name="album_track")
     * @Method("GET")
     */
    public function showTrackAction(Track $track)
    {
        return new Response();
    }
}
 