<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyVolcanoController extends Controller
{

    /**
     * @Route("/volcanos.html", name="volcanos")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Volcano')->findAll();

        return $this->render(
            'default/volcanos.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
