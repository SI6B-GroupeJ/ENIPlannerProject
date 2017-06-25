<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="Promotion", indexes={@ORM\Index(name="IDX_43ECFF72A68ED5A2", columns={"CodeFormation"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodePromotion", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codepromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

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
     * @var float
     *
     * @ORM\Column(name="PrixPECAffecte", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixpecaffecte;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixFinanceAffecte", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixfinanceaffecte;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeContactENI", type="integer", nullable=true)
     */
    private $codecontacteni;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeLieu", type="integer", nullable=true)
     */
    private $codelieu;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeFormation", referencedColumnName="CodeFormation")
     * })
     */
    private $codeformation;



    /**
     * Get codepromotion
     *
     * @return string
     */
    public function getCodepromotion()
    {
        return $this->codepromotion;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Promotion
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
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Promotion
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
     * @return Promotion
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
     * Set prixpublicaffecte
     *
     * @param float $prixpublicaffecte
     *
     * @return Promotion
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
     * @return Promotion
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
     * Set prixpecaffecte
     *
     * @param float $prixpecaffecte
     *
     * @return Promotion
     */
    public function setPrixpecaffecte($prixpecaffecte)
    {
        $this->prixpecaffecte = $prixpecaffecte;

        return $this;
    }

    /**
     * Get prixpecaffecte
     *
     * @return float
     */
    public function getPrixpecaffecte()
    {
        return $this->prixpecaffecte;
    }

    /**
     * Set prixfinanceaffecte
     *
     * @param float $prixfinanceaffecte
     *
     * @return Promotion
     */
    public function setPrixfinanceaffecte($prixfinanceaffecte)
    {
        $this->prixfinanceaffecte = $prixfinanceaffecte;

        return $this;
    }

    /**
     * Get prixfinanceaffecte
     *
     * @return float
     */
    public function getPrixfinanceaffecte()
    {
        return $this->prixfinanceaffecte;
    }

    /**
     * Set codecontacteni
     *
     * @param integer $codecontacteni
     *
     * @return Promotion
     */
    public function setCodecontacteni($codecontacteni)
    {
        $this->codecontacteni = $codecontacteni;

        return $this;
    }

    /**
     * Get codecontacteni
     *
     * @return integer
     */
    public function getCodecontacteni()
    {
        return $this->codecontacteni;
    }

    /**
     * Set codelieu
     *
     * @param integer $codelieu
     *
     * @return Promotion
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
     * Set codeformation
     *
     * @param \GestionERPBundle\Entity\Formation $codeformation
     *
     * @return Promotion
     */
    public function setCodeformation(\GestionERPBundle\Entity\Formation $codeformation = null)
    {
        $this->codeformation = $codeformation;

        return $this;
    }

    /**
     * Get codeformation
     *
     * @return \GestionERPBundle\Entity\Formation
     */
    public function getCodeformation()
    {
        return $this->codeformation;
    }
}
