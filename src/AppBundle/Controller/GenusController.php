<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{
  /**
  * @Route("/genus/{genusName}")
  */
  public function showAction($genusName)
  {
    $templating = $this->container->get('templating');

    //A hardcoded array to be looped over
    $notes = [
      "Notes1",
      "Notes2",
      "Notes3"
    ];

    return $this->render('genus/show.html.twig', [
      'name' => $genusName,
      //Passing the array to the template
      'notes' => $notes
    ]);
  }
}
