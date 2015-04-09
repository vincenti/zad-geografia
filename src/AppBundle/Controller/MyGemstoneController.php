<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyGemstoneController extends Controller
{

    /**
     * @Route("/gemstone.html", name="gemstone")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Gemstone')->findAll();

        return $this->render(
            'default/gemstone.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}