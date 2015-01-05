<?php

namespace TuyMedio\Bundle\CursoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CursoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('grado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('grado')
            ->add('seccion')
            ->add('materias')
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
            ->add('grado', 'entity', array(
                'class' => 'TuyMedioGradoBundle:Grado',
                'property' => 'numero'
            ))
            ->add('seccion', 'entity', array(
                'class' => 'TuyMedioSeccionBundle:Seccion',
                'property' => 'letra'
            ))
            ->add('materias', 'entity', array(
                'multiple' => true,
                'class' => 'TuyMedioMateriaBundle:Materia',
                'property' => 'nombre'
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
            ->add('grado')
            ->add('seccion')
            ->add('materias')
        ;
    }
}
