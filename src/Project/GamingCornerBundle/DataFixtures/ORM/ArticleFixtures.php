<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\GamingCornerBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Project\GamingCornerBundle\Entity\Article;

/**
 * Description of ArticleFixtures
 *
 * @author SakyHank
 */
class ArticleFixtures extends AbstractFixture implements OrderedFixtureInterface{
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
    
        $article = new Article();
        $article->setTitle('Witam w Gaming Corner!');
        $article->setSource('Jest to strona, którą tworze specjalnie na potrzeby przedmiotu Inżyniera Internetu. Mam nadzieję, że pomimo, iż to tylko projekt, każdy znajdzie na niej coś ciekawego dla siebie. ');
        
        $article2 = new Article();
        $article2->setTitle('Recenzent Konrad Ochniowski!');
        $article2->setSource('Teksty recenzji dla Gaming Corner zgodził się pisać mój dobry kolega student UJ Konrad! mam nadzieję, że umilą wasz dzień przy okazji dostarczając rzetelnie zebranych informacji');
    
        $manager->persist($article);
        $manager->persist($article2);
        $manager->flush();
        
    }

}
