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
            ->add('sexo', 'sonata_user_gender', array(
                'required' => true,
                'translation_domain' => $this->getTranslationDomain()
            ))
            ->add('direccionVivienda')
            ->add('fechaNacimiento', 'birthday')
            ->add('lugarNacimiento')
            ->add('gradoActual', 'choice', array(
                'choices' => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                )
            ))
            ->add('gradosCursados', 'choice', array(
                'multiple' => true,
                'choices' => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                )
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
