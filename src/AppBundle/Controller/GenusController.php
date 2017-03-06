<?php

namespace AppBundle\Controller;

//To use routing
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

//To use response class
use Symfony\Component\HttpFoundation\Response;

//To use controller
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{
  /**
  * @Route("/genus/{genusName}")
  */
  public function showAction($genusName)
  {
    //To get the templating service from the container - you need to give the name of the service.
    $templating = $this->container->get('templating')

    //Defining the resposne object, rendered by the templating service with a defined path.
    $html = $templating->render('genus/show.html.twig', [
      'name' => $genusName
    ]);

    return new Response($html);
  }
}
