<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyEquatorController extends Controller
{

    /**
     * @Route("/equators.html", name="equators")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Equator')->findAll();

        return $this->render(
            'default/equators.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
