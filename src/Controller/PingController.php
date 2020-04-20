<?php

namespace App\Controller;

use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingController extends AbstractController
{

  /**
   * @Route("/public/ping", methods={"GET"})
   */
  public function ping() 
  {
    return new Response('pong');
  }
}
