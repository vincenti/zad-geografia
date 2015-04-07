<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPowerplantController extends Controller
{

    /**
     * @Route("/powerplants.html", name="powerplants")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Powerplant')->findAll();

        return $this->render(
            'default/powerplants.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
