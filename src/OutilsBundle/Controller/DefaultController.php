<?php

namespace OutilsBundle\Controller;

use Doctrine\ORM\Mapping\Entity;
use OutilsBundle\Entity\Historisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/historisation", name="historisation")
     */
    public function historisationAction()
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('OutilsBundle:Historisation');

        $dateDebut = date_create('01-08-2016 10:00:00');
        $dateFin = date_create('10-09-2016 10:00:00');

        $liste_historisation = $repository->findByDateHeureModif($dateDebut, $dateFin);

        return $this->render('OutilsBundle:Default:Historisation.html.twig', array(
            'liste_historisation' => $liste_historisation
        ));
    }

    /**
     * @Route("/purge", name="purge")
     */
    public function purgeAction()
    {
        return $this->render('OutilsBundle:Default:Purge.html.twig');
    }

    public function searchHistorisationAction()
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('OutilsBundle:Historisation');

        //if ($auteur !== null) {
          //  $liste_historisation = $repository->findAll();
        //} else {
            $liste_historisation = array();
        //}

        return $this->render('OutilsBundle:Default:Historisation.html.twig', array(
            'liste_historisation' => $liste_historisation
        ));
    }
}
