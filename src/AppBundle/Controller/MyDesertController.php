<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyDesertController extends Controller
{

    /**
     * @Route("/desert.html", name="rivers")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Desert')->findAll();

        return $this->render(
            'default/desert.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}