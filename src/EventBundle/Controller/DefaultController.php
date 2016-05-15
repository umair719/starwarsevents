<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {

        $data = array(
            'count' => $count,
            'firstname' => $name,
            'ackbar' => 'It\'s a trap!!!!'
        );

        $json = json_encode($data);

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
