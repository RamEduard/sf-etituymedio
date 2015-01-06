<?php

namespace TuyMedio\Bundle\AsistenciaBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class AsistenciaAdminController extends CRUDController
{

    /**
     * {@inheritdoc}
     */
    public function createAction()
    {
        // the key used to lookup the template
        $templateKey = 'edit';

        if (false === $this->admin->isGranted('CREATE')) {
            throw new AccessDeniedException();
        }

        $asistencia = $this->admin->getNewInstance();

        $this->admin->setSubject($asistencia);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($asistencia);

        if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                if (false === $this->admin->isGranted('CREATE', $asistencia)) {
                    throw new AccessDeniedException();
                }

                try {
                    $asistencia = $this->admin->create($asistencia);

                    if ($this->isXmlHttpRequest()) {
                        return $this->renderJson(array(
                            'result' => 'ok',
                            'objectId' => $this->admin->getNormalizedIdentifier($asistencia)
                        ));
                    }

                    $this->addFlash(
                        'sonata_flash_success',
                        $this->admin->trans(
                            'flash_create_success',
                            array('%name%' => $this->admin->toString($asistencia)),
                            'SonataAdminBundle'
                        )
                    );

                    // redirect to edit mode
                    return $this->redirectTo($asistencia);

                } catch (ModelManagerException $e) {
                    $this->logModelManagerException($e);

                    $isFormValid = false;
                }
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash(
                        'sonata_flash_error',
                        $this->admin->trans(
                            'flash_create_error',
                            array('%name%' => $this->admin->toString($asistencia)),
                            'SonataAdminBundle'
                        )
                    );
                }
            } elseif ($this->isPreviewRequested()) {
                // pick the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
        
        # Agregado de TuyMedioAsistenciaBundle
        $cursos = $this->admin->getModelManager()->findBy('TuyMedioCursoBundle:Curso');
        
        $formCursos = array();
        
        foreach ($cursos as $curso) {
            $formCursos[$curso->getId()] = $curso->getGrado()->getNumero() . ' ' . $curso->getSeccion()->getLetra();
        }
        # Fin de agregado

        return $this->render($this->admin->getTemplate($templateKey), array(
            'action' => 'create',
            'form'   => $view,
            'cursos' => $formCursos, # Agregado de TuyMedioAsistenciaBundle
            'object' => $asistencia,
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function editAction($id = null)
    {
        // the key used to lookup the template
        $templateKey = 'edit';

        $id = $this->get('request')->get($this->admin->getIdParameter());
        $asistencia = $this->admin->getObject($id);

        if (!$asistencia) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('EDIT', $asistencia)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($asistencia);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($asistencia);

        if ($this->getRestMethod() == 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                try {
                    $asistencia = $this->admin->update($asistencia);

                    if ($this->isXmlHttpRequest()) {
                        return $this->renderJson(array(
                            'result'    => 'ok',
                            'objectId'  => $this->admin->getNormalizedIdentifier($asistencia)
                        ));
                    }

                    $this->addFlash(
                        'sonata_flash_success',
                        $this->admin->trans(
                            'flash_edit_success',
                            array('%name%' => $this->admin->toString($asistencia)),
                            'SonataAdminBundle'
                        )
                    );

                    // redirect to edit mode
                    return $this->redirectTo($asistencia);

                } catch (ModelManagerException $e) {
                    $this->logModelManagerException($e);

                    $isFormValid = false;
                }
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash(
                        'sonata_flash_error',
                        $this->admin->trans(
                            'flash_edit_error',
                            array('%name%' => $this->admin->toString($asistencia)),
                            'SonataAdminBundle'
                        )
                    );
                }
            } elseif ($this->isPreviewRequested()) {
                // enable the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
        
        # Agregado de TuyMedioAsistenciaBundle
        $cursos = $this->admin->getModelManager()->findBy('TuyMedioCursoBundle:Curso');
        
        $formCursos = array();
        
        foreach ($cursos as $curso) {
            $formCursos[$curso->getId()] = $curso->getGrado()->getNumero() . ' ' . $curso->getSeccion()->getLetra();
        }
        # Fin de agregado

        return $this->render($this->admin->getTemplate($templateKey), array(
            'action' => 'edit',
            'form'   => $view,
            'cursos' => $formCursos, # Agregado de TuyMedioAsistenciaBundle
            'object' => $asistencia,
        ));
    }
}
