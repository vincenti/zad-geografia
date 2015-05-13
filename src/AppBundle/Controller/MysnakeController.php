<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MysnakeController extends Controller
{

    /**
     * @Route("/snake.html", name="snake")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:snake')->findAll();

        return $this->render(
            'default/snake.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}