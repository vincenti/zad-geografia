<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCanyonController extends Controller
{

    /**
     * @Route("/canyon.html", name="canyon")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Canyon')->findAll();

        return $this->render(
            'default/canyon.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
