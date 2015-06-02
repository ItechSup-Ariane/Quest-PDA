<?php

namespace ItechSup\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appreciation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Appreciation
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
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

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
     * Set valeur
     *
     * @param integer $valeur
     * @return Appreciation
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set idStagiaire
     *
     * @param integer $idStagiaire
     * @return Appreciation
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
     * @return Appreciation
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
     * @return Appreciation
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
