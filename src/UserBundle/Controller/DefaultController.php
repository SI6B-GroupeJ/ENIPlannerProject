<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/profil")
     */
    public function profilAction()
    {
        return $this->render('UserBundle:Default:profil.html.twig');
    }
}
