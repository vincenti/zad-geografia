<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyFloraController extends Controller
{

    /**
     * @Route("/flora.html", name="flora")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Flora')->findAll();

        return $this->render(
            'default/flora.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
