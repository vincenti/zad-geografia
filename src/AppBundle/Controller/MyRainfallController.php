<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRainfallController extends Controller
{

    /**
     * @Route("/rainfalls.html", name="rainfalls")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Rainfall')->findAll();

        return $this->render(
            'default/rainfalls.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}