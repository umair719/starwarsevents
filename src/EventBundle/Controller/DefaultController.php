<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
        //$em = $this->container->get('doctrine')->getManager();

        $em = $this->gerDoctrine()->getManager();
        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(array(
            'name' => 'Darth\'s suprise birthday party!'
        ));

        return $this->render('EventBundle:Default:index.html.twig',
            array('name' => $name, 'count' => $count));

    }
}
