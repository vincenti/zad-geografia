<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MySeaController extends Controller
{

    /**
     * @Route("/seas.html", name="seas")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Sea')->findAll();

        return $this->render(
            'default/seas.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
