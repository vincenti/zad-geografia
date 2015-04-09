<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyUplandController extends Controller
{

    /**
     * @Route("/upland.html", name="upland")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Upland')->findAll();

        return $this->render(
            'default/upland.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}