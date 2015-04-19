<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyirakController extends Controller
{

    /**
     * @Route("/irak.html", name="irak")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:irak')->findAll();

        return $this->render(
            'default/irak.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
