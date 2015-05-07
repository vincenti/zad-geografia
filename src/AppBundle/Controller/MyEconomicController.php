<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyEconomicController extends Controller
{

    /**
     * @Route("/economic.html", name="economic")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Economic')->findAll();

        return $this->render(
            'default/economic.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
