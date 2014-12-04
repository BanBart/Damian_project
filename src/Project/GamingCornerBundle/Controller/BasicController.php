<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\GamingCornerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of BasicController
 *
 * @author SakyHank
 */
class BasicController extends Controller{
    
    public function indexAction(){    
        return $this->render('ProjectGamingCornerBundle:Page:index.html.twig');
    }
    
    public function reviewAction(){
        return $this->render('ProjectGamingCornerBundle:Page:review.html.twig');
    }
}
