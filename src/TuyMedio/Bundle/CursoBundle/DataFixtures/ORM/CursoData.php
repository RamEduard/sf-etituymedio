<?php

namespace TuyMedio\Bundle\CursoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TuyMedio\Bundle\CursoBundle\Entity\Curso;

/**
 * CursoData
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class CursoData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $grado1 = $manager->find('TuyMedioGradoBundle:Grado', 1);
        $grado2 = $manager->find('TuyMedioGradoBundle:Grado', 2);
        
        if (!is_object($grado1) || !is_object($grado2)) {
            throw new NotFoundHttpException('TuyMedioGradoBundle:Grado:1 || TuyMedioGradoBundle:Grado:2 not found.');
        }
        
        $seccion1 = $manager->find('TuyMedioSeccionBundle:Seccion', 1);
        $seccion2 = $manager->find('TuyMedioSeccionBundle:Seccion', 2);
        
        if (!is_object($seccion1) || !is_object($seccion2)) {
            throw new NotFoundHttpException('TuyMedioSeccionBundle:Seccion:1 || TuyMedioSeccionBundle:Seccion:2 not found.');
        }
        
        $castellano = $manager->find('TuyMedioMateriaBundle:Materia', 1);
        $ingles     = $manager->find('TuyMedioMateriaBundle:Materia', 2);
        $matematica = $manager->find('TuyMedioMateriaBundle:Materia', 3);
        
        if (!is_object($castellano) || !is_object($ingles) || !is_object($matematica)) {
            throw new NotFoundHttpException('TuyMedioMateriaBundle:Materia:1 || TuyMedioMateriaBundle:Materia:2 || TuyMedioMateriaBundle:Materia:3 not found.');
        }
        
        $curso1 = new Curso();
        $curso1->setGrado($grado1);
        $curso1->setSeccion($seccion1);
        $curso1->getMaterias()->add($castellano);
        $curso1->getMaterias()->add($ingles);
        $curso1->getMaterias()->add($matematica);
        
        $curso2 = new Curso();
        $curso2->setGrado($grado2);
        $curso2->setSeccion($seccion2);
        $curso2->getMaterias()->add($castellano);
        $curso2->getMaterias()->add($ingles);
        
        $manager->persist($curso1);
        $manager->persist($curso2);
        $manager->flush();
    }

}
