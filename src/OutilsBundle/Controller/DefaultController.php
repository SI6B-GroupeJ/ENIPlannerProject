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
            ->getManager()
            ->getRepository('OutilsBundle:Historisation');

        // On récupère l'entité correspondante à l'id $id
        $advert = $repository->find($auteur);

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id " . $auteur . " n'existe pas.");
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OutilsBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
    }
}
