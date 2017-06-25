<?php

namespace GestionModuleBundle\Controller;

use Doctrine\ORM\Mapping\Entity;
use GestionModuleBundle\Entity\Moduleindependant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Moduleindependant controller.
 */
class ModuleindependantController extends Controller
{
    /**
     * Recupere la liste de tous les modules independant
     *
     * @Route("/moduleIndependant", name="moduleIndependant")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $moduleindependants = $em->getRepository('GestionModuleBundle:Moduleindependant')->findAll();

        return $this->render('GestionModuleBundle:Default:AffichageModuleIndependant.html.twig', array(
            'moduleindependants' => $moduleindependants
        ));
    }

    /**
     * Supprime le module independant selectionne
     *
     * @Route("/{idmoduleindependant}", name="moduleindependant_delete")
     */
    public function deleteAction(Moduleindependant $moduleindependant)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moduleindependant);
            $em->flush();

        return $this->redirectToRoute('moduleIndependant');
    }


    /**
     * Ajout d'un nouveau module independant
     *
     * @Route("/creationModuleIndependant", name="moduleindependant_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $moduleindependant = new Moduleindependant();
        $form = $this->createForm('GestionModuleBundle\Form\ModuleindependantType', $moduleindependant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($moduleindependant);
            $em->flush();

        }

        return $this->render('GestionModuleBundle:Default:CreationModuleIndependant.html.twig', array(
            'moduleindependant' => $moduleindependant,
            'form' => $form->createView(),
        ));
    }



}
