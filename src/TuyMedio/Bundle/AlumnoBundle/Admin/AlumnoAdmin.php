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
     * @var string
     */
    protected $baseRoutePattern = 'alumno';
    
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
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo', null, array(), 'choice', array(
                'choices' => array(
                    'F' => 'F',
                    'M' => 'M'
                )
            ))
            ->add('direccionVivienda')
            ->add('fechaNacimiento', null, array(), 'date')
            ->add('lugarNacimiento')
            ->add('curso')
            ->add('gradosCursados')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('curso')
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
            ->add('curso', 'entity', array(
                'class' => 'TuyMedioCursoBundle:Curso'
            ))
            ->add('gradosCursados', 'entity', array(
                'multiple' => true,
                'class' => 'TuyMedioGradoBundle:Grado',
                'property' => 'numero'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('cedula')
            ->add('apellidos')
            ->add('nombres')
            ->add('sexo')
            ->add('direccionVivienda')
            ->add('fechaNacimiento')
            ->add('lugarNacimiento')
            ->add('curso')
            ->add('gradosCursados')
        ;
    }
}
