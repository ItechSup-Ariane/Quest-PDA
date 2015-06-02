<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Section
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
     * @var integer
     *
     * @ORM\Column(name="id_formulaire", type="integer")
     */
    private $idFormulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var array
     *
     * @ORM\Column(name="listeQuestions", type="array")
     */
    private $listeQuestions;


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
     * Set idFormulaire
     *
     * @param integer $idFormulaire
     * @return Section
     */
    public function setIdFormulaire($idFormulaire)
    {
        $this->idFormulaire = $idFormulaire;

        return $this;
    }

    /**
     * Get idFormulaire
     *
     * @return integer 
     */
    public function getIdFormulaire()
    {
        return $this->idFormulaire;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Section
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set listeQuestions
     *
     * @param array $listeQuestions
     * @return Section
     */
    public function setListeQuestions($listeQuestions)
    {
        $this->listeQuestions = $listeQuestions;

        return $this;
    }

    /**
     * Get listeQuestions
     *
     * @return array 
     */
    public function getListeQuestions()
    {
        return $this->listeQuestions;
    }
}
