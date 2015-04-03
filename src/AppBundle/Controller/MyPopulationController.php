<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPopulationController extends Controller
{

    /**
     * @Route("/populations.html", name="populations")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Population')->findAll();

        return $this->render(
            'default/populations.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
