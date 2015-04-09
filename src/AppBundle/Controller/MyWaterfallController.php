<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyWaterfallController extends Controller
{

    /**
     * @Route("/waterfalls.html", name="waterfalls")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Waterfall')->findAll();

        return $this->render(
            'default/waterfalls.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
