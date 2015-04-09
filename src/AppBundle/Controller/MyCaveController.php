<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCaveController extends Controller
{

    /**
     * @Route("/caves.html", name="caves")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Cave')->findAll();

        return $this->render(
            'default/caves.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
