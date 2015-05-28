<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyWinterController extends Controller
{

    /**
     * @Route("/winters.html", name="winters")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Winter')->findAll();

        return $this->render(
            'default/winters.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
