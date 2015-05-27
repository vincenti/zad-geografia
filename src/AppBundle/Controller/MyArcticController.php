<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyArcticController extends Controller
{

    /**
     * @Route("/arctic.html", name="arctic")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Arctic')->findAll();

        return $this->render(
            'default/arctic.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
