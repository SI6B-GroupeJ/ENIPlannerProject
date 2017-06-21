<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdministrateurAccueilController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $stagiaires = $em->getRepository('GestionERPBundle:Stagiaire')->findAll();

        var_dump($stagiaires);
        return $this->render('PlanningBundle:Default:index.html.twig');
    }

    /**
     * @Route("/indexResultat", name="accueil_resultat")
     */
    public function indexResultatAction()
    {
        return $this->render('PlanningBundle:Default:indexResultat.html.twig');
    }

    /**
     * @Route("/consultant", name="accueil_consultant")
     */
    public function indexConsultantAction()
    {
        return $this->render('PlanningBundle:Default:indexConsultant.html.twig');
    }

    /**
     * @Route("/consultant/resultat", name="accueil_consultant_resultat")
     */
    public function indexConsultantResultatAction()
    {
        return $this->render('PlanningBundle:Default:indexConsultantResultat.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation", name="consultation_stagiaire")
     */
    public function consultationStagiaireAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaire.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation/consultant", name="consultation_stagiaire_consultant")
     */
    public function consultationStagiaireConsultantAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaireConsultant.html.twig');
    }

    /**
     * @Route("/stagiaire/consultation/sanscalendrier", name="consultation_stagiaire_sanscalendrier")
     */
    public function consultationStagiaireSansCalendrierAction()
    {
        return $this->render('PlanningBundle:Default:consultationStagiaireSansCalendrier.html.twig');
    }

    /**
     * @Route("/planning/add", name="creation_planning")
     */
    public function addPlanningAction()
    {
        return $this->render('PlanningBundle:Default:CreationPlanningAvecSaisie.html.twig');
    }

    /**
     * @Route("/planning/update", name="modification_planning")
     */
    public function updatePlanningAction()
    {
        return $this->render('PlanningBundle:Default:ModificationPlannings.html.twig');
    }

    /**
     * @Route("/planning/comparaison", name="comparaison_planning")
     */
    public function comparaisonPlanningAction()
    {
        return $this->render('PlanningBundle:Default:ComparaisonDePlanning.html.twig');
    }

    /**
     * @Route("/modele", name="consultation_modele_planning")
     */
    public function modeleAction()
    {
        return $this->render('PlanningBundle:Default:GestionModelCalendrier.html.twig');
    }

    /**
     * @Route("/modele/add", name="creation_modele_planning")
     */
    public function addModeleAction()
    {
        return $this->render('PlanningBundle:Default:CreationModelePlanning.html.twig');
    }

    /**
     * @Route("/modele/update", name="modification_modele_planning")
     */
    public function updateModeleAction()
    {
        return $this->render('PlanningBundle:Default:ModificationModelePlanning.html.twig');
    }
}
