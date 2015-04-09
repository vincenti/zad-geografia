<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCountryController extends Controller
{

    /**
     * @Route("/countries.html", name="countries")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Country')->findAll();

        return $this->render(
            'default/countries.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
