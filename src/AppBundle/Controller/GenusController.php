<?php

namespace AppBundle\Controller;

//Adding specification for method
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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

    return $this->render('genus/show.html.twig', [
      'name' => $genusName
    ]);
  }
  //Adding a unique name to the route to be referenced
  /**
  * @Route("/genus/{genusName}/notes", name="genus_show_notes")
  * @Method("GET")
  */
  public function getNotesAction()
  {
    $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];
    $data = [
            'notes' => $notes
    ];
    return new Response(json_encode($data));
  }
}
