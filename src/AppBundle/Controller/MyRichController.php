<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRichController extends Controller
{

    /**
     * @Route("/rich.html", name="rich")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Rich')->findAll();

        return $this->render(
            'default/rich.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}