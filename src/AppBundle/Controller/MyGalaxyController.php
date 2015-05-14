<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyGalaxyController extends Controller
{

    /**
     * @Route("/galaxy.html", name="galaxy")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Galaxy')->findAll();

        return $this->render(
            'default/galaxy.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

} 
