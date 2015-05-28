<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyChannelsController extends Controller
{

    /**
     * @Route("/channels.html", name="channels")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Channesl')->findAll();

        return $this->render(
            'default/channels.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}