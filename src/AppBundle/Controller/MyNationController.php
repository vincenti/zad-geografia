<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyNationController extends Controller
{

    /**
     * @Route("/nation.html", name="nation")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Nation')->findAll();

        return $this->render(
            'default/nation.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
