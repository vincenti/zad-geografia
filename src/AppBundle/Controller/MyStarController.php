<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyStarController extends Controller
{

    /**
     * @Route("/stars.html", name="stars")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Star')->findAll();

        return $this->render(
            'default/stars.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}