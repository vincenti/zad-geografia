<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyWaterfallController extends Controller
{

    /**
     * @Route("/usa.html", name="usa")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Usa')->findAll();

        return $this->render(
            'default/usa.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
