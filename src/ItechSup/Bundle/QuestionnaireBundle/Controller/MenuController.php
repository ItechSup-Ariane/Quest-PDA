<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuController
 *
 * @author Thomas
 */
class MenuController {
    //put your code here
    
     public function indexAction()
    {
        return "<a href=" + "{{ path('questionnaire_formulaire_index') }}" + ">"
                + "Gestion des Formulaires"
            + "</a>"
            + "<a href=" + "{{ path('questionnaire_question_index') }}" + ">"
                + "gestion des Questions"
            + "</a>"
            + "<a href=" + "{{ path('questionnaire_section_index') }}" + ">"
                + "Gestion des Sections"
            + "</a>";
    }
}
