<?php

namespace TuyMedio\Bundle\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin/asistencia")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/test")
     * @Template()
     */
    public function indexAction($name = 'Ramon')
    {
        return array('name' => $name);
    }
    
    /**
     * @param integer $id
     * @Route("/alumnos-curso/{id}")
     */
    public function alumnosCursoAction($id)
    {
        $curso = $this->getDoctrine()->getManager()->find('TuyMedioCursoBundle:Curso', $id);
        
        if (!is_object($curso)) {
            throw new NotFoundHttpException('Curso no encontrado');
        }
        
        $alumnos = array();
        
        foreach ($curso->getAlumnos() as $alumno) {
            $alumnos[] = array(
                'id' => $alumno->getId(),
                'text' => $alumno->__toString()
            );
        }
        
        return new JsonResponse($alumnos);
    }
    
    /**
     * @param integer $id
     * @Route("/materias-curso/{id}")
     */
    public function materiasCursoAction($id)
    {
        $curso = $this->getDoctrine()->getManager()->find('TuyMedioCursoBundle:Curso', $id);
        
        if (!is_object($curso)) {
            throw new NotFoundHttpException('Curso no encontrado');
        }
        
        $materias = array();
        
        foreach ($curso->getMaterias() as $materia) {
            $materias[] = array(
                'id' => $materia->getId(),
                'text' => $materia->__toString()
            );
        }
        
        return new JsonResponse($materias);
    }
}
