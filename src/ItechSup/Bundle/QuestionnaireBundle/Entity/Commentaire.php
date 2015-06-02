<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="texte", type="string", length=255)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_stagiaire", type="integer")
     */
    private $idStagiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formulaire", type="integer")
     */
    private $idFormulaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_periode", type="integer")
     */
    private $idPeriode;


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
     * Set texte
     *
     * @param string $texte
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set idStagiaire
     *
     * @param integer $idStagiaire
     * @return Commentaire
     */
    public function setIdStagiaire($idStagiaire)
    {
        $this->idStagiaire = $idStagiaire;

        return $this;
    }

    /**
     * Get idStagiaire
     *
     * @return integer 
     */
    public function getIdStagiaire()
    {
        return $this->idStagiaire;
    }

    /**
     * Set idFormulaire
     *
     * @param integer $idFormulaire
     * @return Commentaire
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
     * Set idPeriode
     *
     * @param integer $idPeriode
     * @return Commentaire
     */
    public function setIdPeriode($idPeriode)
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    /**
     * Get idPeriode
     *
     * @return integer 
     */
    public function getIdPeriode()
    {
        return $this->idPeriode;
    }
}
