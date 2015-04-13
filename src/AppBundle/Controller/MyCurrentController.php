<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCurrentController extends Controller
{

    /**
     * @Route("/oceancurrents.html", name="oceancurrents")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Current')->findAll();

        return $this->render(
            'default/current.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
