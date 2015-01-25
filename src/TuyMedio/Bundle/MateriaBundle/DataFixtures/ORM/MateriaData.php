<?php

namespace TuyMedio\Bundle\MateriaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TuyMedio\Bundle\MateriaBundle\Entity\Materia;

/**
 * Materia
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class MateriaData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $materia1 = new Materia();
        $materia1->setNombre('Castellano');
        
        $materia2 = new Materia();
        $materia2->setNombre('Inglés');
        
        $materia3 = new Materia();
        $materia3->setNombre('Matemática');
        
        $manager->persist($materia1);
        $manager->persist($materia2);
        $manager->persist($materia3);
        
        $manager->flush();
    }

}
