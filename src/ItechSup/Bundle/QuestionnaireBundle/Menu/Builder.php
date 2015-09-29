<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Menu;

use Knp\Menu\FactoryInterface;
use Doctrine\ORM\Entitymanager;

class Builder {
    private $factory;
    private $em;
    
    public function __construct(FactoryInterface $factory, Entitymanager $em){
        $this->factory = $factory;
        $this->em = $em;
    }
    
    public function createMainMenu() {
        $menu = $this->factory->createItem('root'); //href="/bundles/common/css/master.css?0f194a6"
        $menu->addChild( 'appreciation', array('label' => 'Afficher les appréciations') );
        //$menu->addChild( 'appreciation', array('label' => 'Afficher les appréciations') );
        $menu->addChild( 'commentaire', array('label' => 'Afficher les commentaires') );
        $menu->addChild( 'formulaire', array('label' => 'Afficher les formulaires') );
        $menu->addChild( 'question', array('label' => 'Afficher les questions') );
        $menu->addChild( 'section', array('label' => 'Afficher les sections') );
        //$menu->addChild('Home', array('uri' => '/'));
        // D'autres menus ensuite... 
        
        return $menu;
        
    }
    
}