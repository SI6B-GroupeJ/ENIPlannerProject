<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdministrateurAccueilController extends Controller
{
        /**
     * @Route("/", name="pouet")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $stagiaires = $em->getRepository('GestionERPBundle:Stagiaire')->findAll();

        var_dump($stagiaires);
        return $this->render('PlanningBundle:Default:index.html.twig');
    }

    /**
     * @Route("/indexResultat")
     */
    public function indexResultatAction()
    {
        return $this->render('PlanningBundle:Default:indexResultat.html.twig');
    }

    /**
     * @Route("/consultant")
     */
    public function indexConsultantAction()
    {
        return $this->render('PlanningBundle:Default:indexConsultant.html.twig');
    }

    /**
     * @Route("/consultant/resultat")
     */
    public function indexConsultantResultatAction()
    {
        return $this->render('PlanningBundle:Default:indexConsultantResultat.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation")
     */
    public function consultationStagiaireAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaire.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation/consultant")
     */
    public function consultationStagiaireConsultantAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaireConsultant.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation/sanscalendrier")
     */
    public function consultationStagiaireSansCalendrierAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaireSansCalendrier.html.twig');
    }

    /**
     * @Route("/planning/add")
     */
    public function addPlanningAction()
    {
        return $this->render('PlanningBundle:Default:CreationPlanningAvecSaisie.html.twig');
    }

    /**
     * @Route("/planning/update")
     */
    public function updatePlanningAction()
    {
        return $this->render('PlanningBundle:Default:ModificationPlannings.html.twig');
    }

    /**
     * @Route("/planning/comparaison")
     */
    public function comparaisonPlanningAction()
    {
        return $this->render('PlanningBundle:Default:ComparaisonDePlanning.html.twig');
    }

    /**
     * @Route("/modele")
     */
    public function modeleAction()
    {
        return $this->render('PlanningBundle:Default:GestionModelCalendrier.html.twig');
    }

    /**
     * @Route("/modele/add")
     */
    public function addModeleAction()
    {
        return $this->render('PlanningBundle:Default:CreationModelePlanning.html.twig');
    }

    /**
     * @Route("/modele/update")
     */
    public function updateModeleAction()
    {
        return $this->render('PlanningBundle:Default:ModificationModelePlanning.html.twig');
    }
}