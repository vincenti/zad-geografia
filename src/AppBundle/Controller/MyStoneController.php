<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyStoneController extends Controller
{

    /**
     * @Route("/stones.html", name="stones")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Stone')->findAll();

        return $this->render(
            'default/stones.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
