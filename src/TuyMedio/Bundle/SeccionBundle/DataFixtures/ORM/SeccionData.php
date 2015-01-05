<?php

namespace TuyMedio\Bundle\SeccionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TuyMedio\Bundle\SeccionBundle\Entity\Seccion;

/**
 * SeccionData
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class SeccionData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seccion1 = new Seccion();
        $seccion1->setLetra('A');
        
        $seccion2 = new Seccion();
        $seccion2->setLetra('B');
        
        $seccion3 = new Seccion();
        $seccion3->setLetra('C');
        
        $seccion4 = new Seccion();
        $seccion4->setLetra('D');
        
        $seccion5 = new Seccion();
        $seccion5->setLetra('E');
        
        $seccion6 = new Seccion();
        $seccion6->setLetra('F');
        
        $manager->persist($seccion1);
        $manager->persist($seccion2);
        $manager->persist($seccion3);
        $manager->persist($seccion4);
        $manager->persist($seccion5);
        $manager->persist($seccion6);
        
        $manager->flush();
    }

}
