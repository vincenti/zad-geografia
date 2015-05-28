<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MySchweizController extends Controller
{

    /**
     * @Route("/schweiz.html", name="schweiz")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Schweiz')->findAll();

        return $this->render(
            'default/schweiz.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}