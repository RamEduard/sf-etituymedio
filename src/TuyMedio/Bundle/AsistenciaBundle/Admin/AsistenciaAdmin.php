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
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fecha')
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
            ->add('id')
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
            ))
            ->add('materia', 'entity', array(
                'class' => 'TuyMedioMateriaBundle:Materia'
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
            ->add('fecha')
            ->add('alumnoAsistente')
            ->add('observaciones')
        ;
    }
}
