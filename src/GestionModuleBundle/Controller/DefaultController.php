<?php

namespace GestionModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/moduleIndependant")
     */
    public function moduleIndependantAction()
    {
        return $this->render('GestionModuleBundle:Default:AffichageModuleIndependant.html.twig');
    }

    /**
     * @Route("/moduleIndependant/add")
     */
    public function addModuleIndependantAction()
    {
        return $this->render('GestionModuleBundle:Default:CreationModuleIndependant.html.twig');
    }

    /**
     * @Route("/enchainementModule")
     */
    public function enchainementModuleAction()
    {
        return $this->render('GestionModuleBundle:Default:GestionEnchainementModules.html.twig');
    }

    /**
     * @Route("/enchainementModule/add")
     */
    public function addEnchainementModuleAction()
    {
        return $this->render('GestionModuleBundle:Default:CreationEnchainementModule.html.twig');
    }
}
