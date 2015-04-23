<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyOceanController extends Controller
{

    /**
     * @Route("/ocean.html", name="ocean")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Ocean')->findAll();

        return $this->render(
            'default/ocean.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
