<?php

namespace Smith981\CrudGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Smith981CrudGeneratorBundle:Default:index.html.twig', array('name' => $name));
    }
}
