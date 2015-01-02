<?php

namespace TuyMedio\Bundle\AlumnoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AlumnoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('fechaNacimiento')
            ->add('lugarNacimiento')
            ->add('gradoActual')
            ->add('gradosCursados')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('fechaNacimiento')
            ->add('lugarNacimiento')
            ->add('gradoActual')
            ->add('gradosCursados')
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
            ->add('id')
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('fechaNacimiento')
            ->add('lugarNacimiento')
            ->add('gradoActual')
            ->add('gradosCursados')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('fechaNacimiento')
            ->add('lugarNacimiento')
            ->add('gradoActual')
            ->add('gradosCursados')
        ;
    }
}