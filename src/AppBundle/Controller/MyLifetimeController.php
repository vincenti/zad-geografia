<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyLifetimeController extends Controller
{

    /**
     * @Route("/lifetime.html", name="lifetime")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Lifetime')->findAll();

        return $this->render(
            'default/lifetime.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
