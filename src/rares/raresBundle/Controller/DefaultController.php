<?php

namespace rares\raresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('raresraresBundle:Default:index.html.twig', array('name' => $name));
    }
}
