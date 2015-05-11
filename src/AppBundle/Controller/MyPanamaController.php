<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPanamaController extends Controller
{

    /**
     * @Route("/panama.html", name="panama")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Panama')->findAll();

        return $this->render(
            'default/panama.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
