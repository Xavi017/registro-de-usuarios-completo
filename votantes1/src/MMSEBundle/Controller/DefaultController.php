<?php

namespace MMSEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MMSEBundle:Default:index.html.twig', array('name' => $name));
    }
}
