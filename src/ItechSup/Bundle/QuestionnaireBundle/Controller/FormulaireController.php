<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ItechSup\Bundle\QuestionnaireBundle\Entity\Formulaire;
use ItechSup\Bundle\QuestionnaireBundle\Form\FormulaireType;

/**
 * Formulaire controller.
 *
 * @Route("/questionnaire_formulaire")
 */
class FormulaireController extends Controller
{

    /**
     * Lists all Formulaire entities.
     *
     * @Route("/", name="questionnaire_formulaire")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ItechSupQuestionnaireBundle:Formulaire')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Creates a new Formulaire entity.
     *
     * @Route("/", name="questionnaire_formulaire_create")
     * @Method("POST")
     * @Template("ItechSupQuestionnaireBundle:Formulaire:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Formulaire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_formulaire_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Formulaire entity.
     *
     * @param Formulaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Formulaire $entity)
    {
        $form = $this->createForm(new FormulaireType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_formulaire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Formulaire entity.
     *
     * @Route("/new", name="questionnaire_formulaire_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Formulaire();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Formulaire entity.
     *
     * @Route("/{id}", name="questionnaire_formulaire_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Formulaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Formulaire entity.
     *
     * @Route("/{id}/edit", name="questionnaire_formulaire_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Formulaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulaire entity.');
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
    * Creates a form to edit a Formulaire entity.
    *
    * @param Formulaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Formulaire $entity)
    {
        $form = $this->createForm(new FormulaireType(), $entity, array(
            'action' => $this->generateUrl('questionnaire_formulaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
    /**
     * Edits an existing Formulaire entity.
     *
     * @Route("/{id}", name="questionnaire_formulaire_update")
     * @Method("PUT")
     * @Template("ItechSupQuestionnaireBundle:Formulaire:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ItechSupQuestionnaireBundle:Formulaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('questionnaire_formulaire_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Deletes a Formulaire entity.
     *
     * @Route("/{id}", name="questionnaire_formulaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ItechSupQuestionnaireBundle:Formulaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formulaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionnaire_formulaire'));
    }

    /**
     * Creates a form to delete a Formulaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionnaire_formulaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
