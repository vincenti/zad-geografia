<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCityController extends Controller
{

    /**
     * @Route("/city.html", name="city")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:City')->findAll();

        return $this->render(
            'default/city.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}