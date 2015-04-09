<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyIslandController extends Controller
{

    /**
     * @Route("/islands.html", name="islands")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Island')->findAll();

        return $this->render(
            'default/islands.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
