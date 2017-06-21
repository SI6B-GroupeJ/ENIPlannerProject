<?php

namespace OutilsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/historisation", name="historisation")
     */
    public function historisationAction()
    {
        return $this->render('OutilsBundle:Default:Historisation.html.twig');
    }

    /**
     * @Route("/purge", name="purge")
     */
    public function purgeAction()
    {
        return $this->render('OutilsBundle:Default:Purge.html.twig');
    }

    public function searchHistorisationAction($auteur)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('OutilsBundle:Historisation');

        if ($auteur !== null) {
            $liste_historisation = $repository->findByAuteur($auteur);
        } else {
            $liste_historisation = array();
        }

        return $this->render('OutilsBundle:historisation.html.twig', array(
            'liste_historisation' => $liste_historisation
        ));
    }
}
