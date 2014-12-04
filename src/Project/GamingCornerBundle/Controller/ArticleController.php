<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\GamingCornerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of ArticleController
 *
 * @author SakyHank
 */
class ArticleController extends Controller {
    
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('ProjectGamingCornerBundle:Article')->findAll();
        
        return $this->render('ProjectGamingCornerBundle:Article:index.html.twig',array(
           'articles' => $articles 
        ));
    }
}
