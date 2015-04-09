<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyMoonController extends Controller
{

    /**
     * @Route("/moons.html", name="moons")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Moon')->findAll();

        return $this->render(
            'default/moons.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
