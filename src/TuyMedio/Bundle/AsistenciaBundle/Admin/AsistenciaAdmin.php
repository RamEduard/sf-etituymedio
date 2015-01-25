<?php

namespace TuyMedio\Bundle\AsistenciaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AsistenciaAdmin extends Admin
{
    
    /**
     * @var string
     */
    protected $baseRoutePattern = 'asistencia';
    
    /**
     * @var boolean
     */
    protected $supportsPreviewMode = true;
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('materia')
            ->add('alumno')
            ->add('fecha', null, array(), 'date')
            ->add('alumnoAsistente')
            ->add('observaciones')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('materia')
            ->add('alumno')
            ->add('fecha')
            ->add('alumnoAsistente')
            ->add('observaciones')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id', 'hidden')
            ->add('alumno', 'entity', array(
                'class' => 'TuyMedioAlumnoBundle:Alumno'
                #'choices' => array()
            ))
            ->add('materia', 'entity', array(
                'class' => 'TuyMedioMateriaBundle:Materia'
                #'choices' => array()
            ))
            ->add('fecha', 'date')
            ->add('alumnoAsistente')
            ->add('observaciones', null, array(
                'required' => false
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('materia')
            ->add('alumno')
            ->add('fecha')
            ->add('alumnoAsistente')
            ->add('observaciones')
        ;
    }
}
