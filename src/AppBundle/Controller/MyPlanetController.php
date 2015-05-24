<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPlanetController extends Controller
{

    /**
     * @Route("/planets.html", name="planets")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Planet')->findAll();

        return $this->render(
            'default/planets.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}