<?php

namespace TuyMedio\Bundle\GradoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TuyMedio\Bundle\GradoBundle\Entity\Grado;

/**
 * GradoData
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class GradoData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $grado1 = new Grado();
        $grado1->setNumero('1');
        
        $grado2 = new Grado();
        $grado2->setNumero('2');
        
        $grado3 = new Grado();
        $grado3->setNumero('3');
        
        $grado4 = new Grado();
        $grado4->setNumero('4');
        
        $grado5 = new Grado();
        $grado5->setNumero('5');
        
        $grado6 = new Grado();
        $grado6->setNumero('6');
        
        $manager->persist($grado1);
        $manager->persist($grado2);
        $manager->persist($grado3);
        $manager->persist($grado4);
        $manager->persist($grado5);
        $manager->persist($grado6);
        
        $manager->flush();
    }

}
