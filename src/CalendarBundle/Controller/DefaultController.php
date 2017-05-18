<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $salles = $this->getDoctrine()
            ->getRepository('CalendarBundle:Salle')->findAll();


        if (!$salles) {
            throw $this->createNotFoundException(
                'Aucunes salles trouvées'
            );
        }

        dump($salles);

        return $this->render('CalendarBundle:Default:index.html.twig', array('salles' => $salles));

    }
}
