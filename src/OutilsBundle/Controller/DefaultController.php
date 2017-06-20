<?php

namespace OutilsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/historisation")
     */
    public function historisationAction()
    {
        return $this->render('OutilsBundle:Default:Historisation.html.twig');
    }
}
