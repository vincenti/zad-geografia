<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyLakeController extends Controller
{

    /**
     * @Route("/lakes.html", name="lakes")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Lake')->findAll();

        return $this->render(
            'default/lakes.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
