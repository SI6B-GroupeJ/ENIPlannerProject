<?php

namespace GestionModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/moduleIndependant", name="consultation_module_independant")
     */
    public function moduleIndependantAction()
    {
        return $this->render('GestionModuleBundle:Default:AffichageModuleIndependant.html.twig');
    }

    /**
     * @Route("/moduleIndependant/add", name="creation_module_independant")
     */
    public function addModuleIndependantAction()
    {
        return $this->render('GestionModuleBundle:Default:CreationModuleIndependant.html.twig');
    }

    /**
     * @Route("/moduleIndependant/update", name="modification_module_independant")
     */
    public function updateModuleIndependantAction()
    {
        return $this->render('GestionModuleBundle:Default:ModifierModuleIndependant.html.twig');
    }

    /**
     * @Route("/enchainementModule", name="consultation_enchainement_module")
     */
    public function enchainementModuleAction()
    {
        return $this->render('GestionModuleBundle:Default:GestionEnchainementModules.html.twig');
    }

    /**
     * @Route("/enchainementModule/add", name="creation_enchainement_module")
     */
    public function addEnchainementModuleAction()
    {
        return $this->render('GestionModuleBundle:Default:CreationEnchainementModule.html.twig');
    }
}
