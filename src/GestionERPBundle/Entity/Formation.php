<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="Formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeFormation", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeformation;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleLong", type="string", length=200, nullable=false)
     */
    private $libellelong;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCourt", type="string", length=50, nullable=false)
     */
    private $libellecourt;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnHeures", type="smallint", nullable=false)
     */
    private $dureeenheures;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxHoraire", type="float", precision=53, scale=0, nullable=false)
     */
    private $tauxhoraire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTitre", type="string", length=8, nullable=true)
     */
    private $codetitre;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixPublicEnCours", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixpublicencours;

    /**
     * @var integer
     *
     * @ORM\Column(name="HeuresCentre", type="smallint", nullable=true)
     */
    private $heurescentre;

    /**
     * @var integer
     *
     * @ORM\Column(name="HeuresStage", type="smallint", nullable=true)
     */
    private $heuresstage;

    /**
     * @var integer
     *
     * @ORM\Column(name="SemainesCentre", type="smallint", nullable=true)
     */
    private $semainescentre;

    /**
     * @var integer
     *
     * @ORM\Column(name="SemainesStage", type="smallint", nullable=true)
     */
    private $semainesstage;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnSemaines", type="smallint", nullable=false)
     */
    private $dureeensemaines;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ECFaPasser", type="integer", nullable=true)
     */
    private $ecfapasser;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeFormation", type="integer", nullable=true)
     */
    private $typeformation;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeLieu", type="integer", nullable=true)
     */
    private $codelieu;



    /**
     * Get codeformation
     *
     * @return string
     */
    public function getCodeformation()
    {
        return $this->codeformation;
    }

    /**
     * Set libellelong
     *
     * @param string $libellelong
     *
     * @return Formation
     */
    public function setLibellelong($libellelong)
    {
        $this->libellelong = $libellelong;

        return $this;
    }

    /**
     * Get libellelong
     *
     * @return string
     */
    public function getLibellelong()
    {
        return $this->libellelong;
    }

    /**
     * Set libellecourt
     *
     * @param string $libellecourt
     *
     * @return Formation
     */
    public function setLibellecourt($libellecourt)
    {
        $this->libellecourt = $libellecourt;

        return $this;
    }

    /**
     * Get libellecourt
     *
     * @return string
     */
    public function getLibellecourt()
    {
        return $this->libellecourt;
    }

    /**
     * Set dureeenheures
     *
     * @param integer $dureeenheures
     *
     * @return Formation
     */
    public function setDureeenheures($dureeenheures)
    {
        $this->dureeenheures = $dureeenheures;

        return $this;
    }

    /**
     * Get dureeenheures
     *
     * @return integer
     */
    public function getDureeenheures()
    {
        return $this->dureeenheures;
    }

    /**
     * Set tauxhoraire
     *
     * @param float $tauxhoraire
     *
     * @return Formation
     */
    public function setTauxhoraire($tauxhoraire)
    {
        $this->tauxhoraire = $tauxhoraire;

        return $this;
    }

    /**
     * Get tauxhoraire
     *
     * @return float
     */
    public function getTauxhoraire()
    {
        return $this->tauxhoraire;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Formation
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
     * Set codetitre
     *
     * @param string $codetitre
     *
     * @return Formation
     */
    public function setCodetitre($codetitre)
    {
        $this->codetitre = $codetitre;

        return $this;
    }

    /**
     * Get codetitre
     *
     * @return string
     */
    public function getCodetitre()
    {
        return $this->codetitre;
    }

    /**
     * Set prixpublicencours
     *
     * @param float $prixpublicencours
     *
     * @return Formation
     */
    public function setPrixpublicencours($prixpublicencours)
    {
        $this->prixpublicencours = $prixpublicencours;

        return $this;
    }

    /**
     * Get prixpublicencours
     *
     * @return float
     */
    public function getPrixpublicencours()
    {
        return $this->prixpublicencours;
    }

    /**
     * Set heurescentre
     *
     * @param integer $heurescentre
     *
     * @return Formation
     */
    public function setHeurescentre($heurescentre)
    {
        $this->heurescentre = $heurescentre;

        return $this;
    }

    /**
     * Get heurescentre
     *
     * @return integer
     */
    public function getHeurescentre()
    {
        return $this->heurescentre;
    }

    /**
     * Set heuresstage
     *
     * @param integer $heuresstage
     *
     * @return Formation
     */
    public function setHeuresstage($heuresstage)
    {
        $this->heuresstage = $heuresstage;

        return $this;
    }

    /**
     * Get heuresstage
     *
     * @return integer
     */
    public function getHeuresstage()
    {
        return $this->heuresstage;
    }

    /**
     * Set semainescentre
     *
     * @param integer $semainescentre
     *
     * @return Formation
     */
    public function setSemainescentre($semainescentre)
    {
        $this->semainescentre = $semainescentre;

        return $this;
    }

    /**
     * Get semainescentre
     *
     * @return integer
     */
    public function getSemainescentre()
    {
        return $this->semainescentre;
    }

    /**
     * Set semainesstage
     *
     * @param integer $semainesstage
     *
     * @return Formation
     */
    public function setSemainesstage($semainesstage)
    {
        $this->semainesstage = $semainesstage;

        return $this;
    }

    /**
     * Get semainesstage
     *
     * @return integer
     */
    public function getSemainesstage()
    {
        return $this->semainesstage;
    }

    /**
     * Set dureeensemaines
     *
     * @param integer $dureeensemaines
     *
     * @return Formation
     */
    public function setDureeensemaines($dureeensemaines)
    {
        $this->dureeensemaines = $dureeensemaines;

        return $this;
    }

    /**
     * Get dureeensemaines
     *
     * @return integer
     */
    public function getDureeensemaines()
    {
        return $this->dureeensemaines;
    }

    /**
     * Set archiver
     *
     * @param boolean $archiver
     *
     * @return Formation
     */
    public function setArchiver($archiver)
    {
        $this->archiver = $archiver;

        return $this;
    }

    /**
     * Get archiver
     *
     * @return boolean
     */
    public function getArchiver()
    {
        return $this->archiver;
    }

    /**
     * Set ecfapasser
     *
     * @param integer $ecfapasser
     *
     * @return Formation
     */
    public function setEcfapasser($ecfapasser)
    {
        $this->ecfapasser = $ecfapasser;

        return $this;
    }

    /**
     * Get ecfapasser
     *
     * @return integer
     */
    public function getEcfapasser()
    {
        return $this->ecfapasser;
    }

    /**
     * Set typeformation
     *
     * @param integer $typeformation
     *
     * @return Formation
     */
    public function setTypeformation($typeformation)
    {
        $this->typeformation = $typeformation;

        return $this;
    }

    /**
     * Get typeformation
     *
     * @return integer
     */
    public function getTypeformation()
    {
        return $this->typeformation;
    }

    /**
     * Set codelieu
     *
     * @param integer $codelieu
     *
     * @return Formation
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
}
