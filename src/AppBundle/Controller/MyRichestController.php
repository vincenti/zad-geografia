<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRichestController extends Controller
{

    /**
     * @Route("/richest.html", name="richest")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Richest')->findAll();

        return $this->render(
            'default/richest.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
