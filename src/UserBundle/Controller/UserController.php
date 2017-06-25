<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/gestionprofil", name="gestionprofil")
     */
    public function profilAction()
    {
        $em = $this->getDoctrine()->getManager('eniplanner');
        $user = $this->getUser();

        return $this->render('UserBundle:Default:profil.html.twig', array('user'=>$user));
    }
}
