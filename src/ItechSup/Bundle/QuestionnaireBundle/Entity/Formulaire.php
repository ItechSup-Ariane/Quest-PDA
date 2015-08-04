<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Formulaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var array
     *
     * @ORM\Column(name="listeSections", type="array")
     */
    private $listeSections;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Formulaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set listeSections
     *
     * @param array $listeSections
     * @return Formulaire
     */
    public function setListeSections($listeSections)
    {
        $this->listeSections = $listeSections;

        return $this;
    }

    /**
     * Get listeSections
     *
     * @return array 
     */
    public function getListeSections()
    {
        return $this->listeSections;
    }
}
