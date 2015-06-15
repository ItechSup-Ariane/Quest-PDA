<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ItechSup\Bundle\QuestionnaireBundle\Entity\Appreciation;
use ItechSup\Bundle\QuestionnaireBundle\Form\AppreciationType;

/**
 * Appreciation controller.
 *
 * @Route("/questionnaire_formualaire")
 */
class AppreciationController extends Controller
{

    /**
     * Lists all Appreciation entities.
     *
     * @Route("/", name="questionnaire_formualaire")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ItechSupQuestionnaireBundle:Appreciation')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Creates a new Appreciation entity.
     *
     * @Route("/", name="questionnaire_formualaire_create")
     * @Method("POST")
     * @Template("ItechSupQuestionnaireBundle:Appreciation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Appreciation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_formualaire_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Appreciation entity.
     *
     * @param Appreciation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Appreciation $entity)
    {
        $form = $this->createForm(new AppreciationType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_formualaire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Appreciation entity.
     *
     * @Route("/new", name="questionnaire_formualaire_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Appreciation();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Appreciation entity.
     *
     * @Route("/{id}", name="questionnaire_formualaire_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Appreciation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appreciation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Appreciation entity.
     *
     * @Route("/{id}/edit", name="questionnaire_formualaire_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Appreciation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appreciation entity.');
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
    * Creates a form to edit a Appreciation entity.
    *
    * @param Appreciation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Appreciation $entity)
    {
        $form = $this->createForm(new AppreciationType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_formualaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Appreciation entity.
     *
     * @Route("/{id}", name="questionnaire_formualaire_update")
     * @Method("PUT")
     * @Template("ItechSupQuestionnaireBundle:Appreciation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Appreciation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appreciation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_formualaire_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Deletes a Appreciation entity.
     *
     * @Route("/{id}", name="questionnaire_formualaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ItechSupQuestionnaireBundle:Appreciation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Appreciation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionnaire_formualaire'));
    }

    /**
     * Creates a form to delete a Appreciation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionnaire_formualaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
