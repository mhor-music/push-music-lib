<?php

namespace Mhor\PushMusicLibBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PushApiController
 * @package Mhor\PushMusicLibBundle\Controller\Api
 *
 * @Route("/api")
 */
class PushApiController extends Controller
{
    /**
     * Return JSON with valid token if user
     * is correctly authenticated
     *
     * @Route("/auth", name="auth")
     * @Method("POST")
     */
    public function authAction()
    {
        return new Response();
    }

    /**
     * Receive and manage device Push
     *
     * @Route("/push", name="push")
     * @Method("POST")
     */
    public function pushAction()
    {
        return new Response();
    }
}
 