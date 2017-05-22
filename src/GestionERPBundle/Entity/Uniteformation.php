<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniteformation
 *
 * @ORM\Table(name="UniteFormation")
 * @ORM\Entity
 */
class Uniteformation
{
    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnHeures", type="smallint", nullable=false)
     */
    private $dureeenheures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnSemaines", type="smallint", nullable=false)
     */
    private $dureeensemaines;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCourt", type="string", length=10, nullable=false)
     */
    private $libellecourt;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdUniteFormation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteformation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Uniteformation
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
     * Set dureeenheures
     *
     * @param integer $dureeenheures
     *
     * @return Uniteformation
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
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Uniteformation
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
     * Set dureeensemaines
     *
     * @param integer $dureeensemaines
     *
     * @return Uniteformation
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
     * Set libellecourt
     *
     * @param string $libellecourt
     *
     * @return Uniteformation
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
     * Get iduniteformation
     *
     * @return integer
     */
    public function getIduniteformation()
    {
        return $this->iduniteformation;
    }

    /**
     * Set archiver
     *
     * @param boolean $archiver
     *
     * @return Uniteformation
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
}
