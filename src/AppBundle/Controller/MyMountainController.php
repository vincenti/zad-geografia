<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyMountainController extends Controller
{

    /**
     * @Route("/mountains.html", name="mountains")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Mountain')->findAll();

        return $this->render(
            'default/mountains.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}