<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyAnimalsController extends Controller
{

    /**
     * @Route("/rivers.html", name="rivers")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Animals')->findAll();

        return $this->render(
            'default/animals.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}