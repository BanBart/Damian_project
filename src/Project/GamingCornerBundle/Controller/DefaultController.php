<?php

namespace Project\GamingCornerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjectGamingCornerBundle:Default:index.html.twig', array('name' => $name));
    }
}
