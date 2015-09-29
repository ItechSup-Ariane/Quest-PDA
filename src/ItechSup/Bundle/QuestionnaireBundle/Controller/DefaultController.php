<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $appreciation = new Appreciation();
//        $appreciation->setIdFormulaire(1);
//        $appreciation->setIdPeriode(1);
//        $appreciation->setIdStagiaire(1);
//        $appreciation->setValeur(1);
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($appreciation);
//        $em->flush(); 
        
//        $creationFormulaire = '<a href="http://www.w3schools.com">Créer un nouveau formulaire</a>';
//        $creationFormulaire = '<input type="text" />';
        
//        $form = $this->createFormBuilder()
//                ->add('nom','text')
//                ->add('Mot_de_passe','password')
//                ->add('Valider','submit')
//                ->getForm();
        
//        $form = $this->createFormBuilder()
//        ->add('Outils_et_support_pedagogiques','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Outils et support pédagogiques'))
//        ->add('Conformite_avec_le_referentiel','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Conformité avec le référentiel'))
//        ->add('Duree_rapport_theorie_pratique','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Durée, rapport théorie/pratique'))
//        ->add('Rythme_participation','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Rythme, participation'))
//        ->add('Ambiance_groupe','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Ambiance groupe'))
//        ->add('Conditions_materielles','choice',
//                array('choices' => array('1'=>'Nul','2'=>'Mauvais','3'=>'Moyen','4'=>'Bon','5'=>'Très bon'),
//                'expanded'=>true,
//                'label'=>'Condiditions matérielles'))
//        ->getForm();
//        
//        echo("");
        
        	
//        $nom = $form->get('nom')->getData();
////        var_dump($nom);
//        
//        return $this->render('ItechSupQuestionnaireBundle:Default:index.html.twig',array('form'=> $form -> createView()));
////        return $this->render('ItechSupQuestionnaireBundle:Default:index.html.twig', array('creationForm' => $creationFormulaire));
        return $this->render('ItechSupQuestionnaireBundle:Default:index.html.twig');
    }
}
