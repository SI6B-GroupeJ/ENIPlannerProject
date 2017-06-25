<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="Cours", indexes={@ORM\Index(name="IDX_3C0BA39827D389CC", columns={"CodePromotion"}), @ORM\Index(name="IDX_3C0BA3989643ECE4", columns={"IdModule"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Debut", type="datetime", nullable=false)
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fin", type="datetime", nullable=false)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeReelleEnHeures", type="smallint", nullable=false)
     */
    private $dureereelleenheures;

    /**
     * @var guid
     *
     * @ORM\Column(name="IdCours", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixPublicAffecte", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixpublicaffecte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCours", type="string", length=50, nullable=false)
     */
    private $libellecours;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureePrevueEnHeures", type="smallint", nullable=false)
     */
    private $dureeprevueenheures;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DateAdefinir", type="boolean", nullable=false)
     */
    private $dateadefinir = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeSalle", type="string", length=5, nullable=true)
     */
    private $codesalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeFormateur", type="integer", nullable=true)
     */
    private $codeformateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeLieu", type="integer", nullable=true)
     */
    private $codelieu;

    /**
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodePromotion", referencedColumnName="CodePromotion")
     * })
     */
    private $codepromotion;

    /**
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdModule", referencedColumnName="IdModule")
     * })
     */
    private $idmodule;



    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Cours
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Cours
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set dureereelleenheures
     *
     * @param integer $dureereelleenheures
     *
     * @return Cours
     */
    public function setDureereelleenheures($dureereelleenheures)
    {
        $this->dureereelleenheures = $dureereelleenheures;

        return $this;
    }

    /**
     * Get dureereelleenheures
     *
     * @return integer
     */
    public function getDureereelleenheures()
    {
        return $this->dureereelleenheures;
    }

    /**
     * Get idcours
     *
     * @return guid
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set prixpublicaffecte
     *
     * @param float $prixpublicaffecte
     *
     * @return Cours
     */
    public function setPrixpublicaffecte($prixpublicaffecte)
    {
        $this->prixpublicaffecte = $prixpublicaffecte;

        return $this;
    }

    /**
     * Get prixpublicaffecte
     *
     * @return float
     */
    public function getPrixpublicaffecte()
    {
        return $this->prixpublicaffecte;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Cours
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set libellecours
     *
     * @param string $libellecours
     *
     * @return Cours
     */
    public function setLibellecours($libellecours)
    {
        $this->libellecours = $libellecours;

        return $this;
    }

    /**
     * Get libellecours
     *
     * @return string
     */
    public function getLibellecours()
    {
        return $this->libellecours;
    }

    /**
     * Set dureeprevueenheures
     *
     * @param integer $dureeprevueenheures
     *
     * @return Cours
     */
    public function setDureeprevueenheures($dureeprevueenheures)
    {
        $this->dureeprevueenheures = $dureeprevueenheures;

        return $this;
    }

    /**
     * Get dureeprevueenheures
     *
     * @return integer
     */
    public function getDureeprevueenheures()
    {
        return $this->dureeprevueenheures;
    }

    /**
     * Set dateadefinir
     *
     * @param boolean $dateadefinir
     *
     * @return Cours
     */
    public function setDateadefinir($dateadefinir)
    {
        $this->dateadefinir = $dateadefinir;

        return $this;
    }

    /**
     * Get dateadefinir
     *
     * @return boolean
     */
    public function getDateadefinir()
    {
        return $this->dateadefinir;
    }

    /**
     * Set codesalle
     *
     * @param string $codesalle
     *
     * @return Cours
     */
    public function setCodesalle($codesalle)
    {
        $this->codesalle = $codesalle;

        return $this;
    }

    /**
     * Get codesalle
     *
     * @return string
     */
    public function getCodesalle()
    {
        return $this->codesalle;
    }

    /**
     * Set codeformateur
     *
     * @param integer $codeformateur
     *
     * @return Cours
     */
    public function setCodeformateur($codeformateur)
    {
        $this->codeformateur = $codeformateur;

        return $this;
    }

    /**
     * Get codeformateur
     *
     * @return integer
     */
    public function getCodeformateur()
    {
        return $this->codeformateur;
    }

    /**
     * Set codelieu
     *
     * @param integer $codelieu
     *
     * @return Cours
     */
    public function setCodelieu($codelieu)
    {
        $this->codelieu = $codelieu;

        return $this;
    }

    /**
     * Get codelieu
     *
     * @return integer
     */
    public function getCodelieu()
    {
        return $this->codelieu;
    }

    /**
     * Set codepromotion
     *
     * @param \GestionERPBundle\Entity\Promotion $codepromotion
     *
     * @return Cours
     */
    public function setCodepromotion(\GestionERPBundle\Entity\Promotion $codepromotion = null)
    {
        $this->codepromotion = $codepromotion;

        return $this;
    }

    /**
     * Get codepromotion
     *
     * @return \GestionERPBundle\Entity\Promotion
     */
    public function getCodepromotion()
    {
        return $this->codepromotion;
    }

    /**
     * Set idmodule
     *
     * @param \GestionERPBundle\Entity\Module $idmodule
     *
     * @return Cours
     */
    public function setIdmodule(\GestionERPBundle\Entity\Module $idmodule = null)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return \GestionERPBundle\Entity\Module
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }
}
