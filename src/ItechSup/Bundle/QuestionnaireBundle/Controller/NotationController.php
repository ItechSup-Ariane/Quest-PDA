<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ItechSup\Bundle\QuestionnaireBundle\Entity\Notation;
use ItechSup\Bundle\QuestionnaireBundle\Form\NotationType;

/**
 * Notation controller.
 *
 * @Route("/questionnaire_notation")
 */
class NotationController extends Controller
{

    /**
     * Lists all Notation entities.
     *
     * @Route("/", name="questionnaire_notation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ItechSupQuestionnaireBundle:Notation')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Notation entity.
     *
     * @Route("/", name="questionnaire_notation_create")
     * @Method("POST")
     * @Template("ItechSupQuestionnaireBundle:Notation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Notation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_notation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Notation entity.
     *
     * @param Notation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Notation $entity)
    {
        $form = $this->createForm(new NotationType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_notation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Notation entity.
     *
     * @Route("/new", name="questionnaire_notation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Notation();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Notation entity.
     *
     * @Route("/{id}", name="questionnaire_notation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Notation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Notation entity.
     *
     * @Route("/{id}/edit", name="questionnaire_notation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Notation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Notation entity.
    *
    * @param Notation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Notation $entity)
    {
        $form = $this->createForm(new NotationType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_notation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Notation entity.
     *
     * @Route("/{id}", name="questionnaire_notation_update")
     * @Method("PUT")
     * @Template("ItechSupQuestionnaireBundle:Notation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Notation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_notation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Notation entity.
     *
     * @Route("/{id}", name="questionnaire_notation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ItechSupQuestionnaireBundle:Notation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Notation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionnaire_notation'));
    }

    /**
     * Creates a form to delete a Notation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionnaire_notation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
