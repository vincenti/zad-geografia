<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRiverController extends Controller
{

    /**
     * @Route("/rainfall.html", name="rainfall")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Rainfall')->findAll();

        return $this->render(
            'default/rainfall.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}