<?php

namespace TuyMedio\Bundle\CursoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TuyMedio\Bundle\AlumnoBundle\Entity\Alumno;

/**
 * CursoData
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class AlumnoData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $curso1 = $manager->find('TuyMedioCursoBundle:Curso', 1);
        $curso2 = $manager->find('TuyMedioCursoBundle:Curso', 2);
        
        $alumno1 = new Alumno();
        $alumno1->setCedula(25947295)
                ->setNombres('LEE STEFANY')
                ->setApellidos('GARCIA FERNANDEZ')
                ->setSexo('F')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso1);
        
        $alumno2 = new Alumno();
        $alumno2->setCedula(25947358)
                ->setNombres('CHARLIS ALESSANDER')
                ->setApellidos('VIANA VASQUEZ')
                ->setSexo('M')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso1);
        
        $alumno3 = new Alumno();
        $alumno3->setCedula(26113038)
                ->setNombres('LENNYS JONERKIS')
                ->setApellidos('GONZALEZ BOLIVAR')
                ->setSexo('F')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso1);
        
        $alumno4 = new Alumno();
        $alumno4->setCedula(26113871)
                ->setNombres('JHORVIN JOSÉ')
                ->setApellidos('HERNÁNDEZ DORANTE')
                ->setSexo('M')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso2);
        
        $alumno5 = new Alumno();
        $alumno5->setCedula(26409151)
                ->setNombres('JUNIOR ANTONIO')
                ->setApellidos('PINTO BASTARDO')
                ->setSexo('M')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso2);
        
        $alumno6 = new Alumno();
        $alumno6->setCedula(26427795)
                ->setNombres('LUIS ALFONSO')
                ->setApellidos('BOLAÑO RUIZ')
                ->setSexo('M')
                ->setDireccionVivienda('Santa Lucía')
                ->setFechaNacimiento(new \Datetime())
                ->setLugarNacimiento('Caracas')
                ->setCurso($curso2);
        
        $manager->persist($alumno1);
        $manager->persist($alumno2);
        $manager->persist($alumno3);
        $manager->persist($alumno4);
        $manager->persist($alumno5);
        $manager->persist($alumno6);
        
        $manager->flush();
    }

}
