<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyUnemploymentController extends Controller
{

    /**
     * @Route("/unemployment.html", name="unemployment")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Unemployment')->findAll();

        return $this->render(
            'default/unemployment.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

} 
