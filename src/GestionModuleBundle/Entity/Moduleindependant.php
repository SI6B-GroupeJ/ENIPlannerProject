<?php

namespace GestionModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduleindependant
 *
 * @ORM\Table(name="ModuleIndependant")
 * @ORM\Entity
 */
class Moduleindependant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdModuleIndependant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmoduleindependant;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleModuleInd", type="string", length=255, nullable=false)
     */
    private $libellemoduleind;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCourtModuleInd", type="string", length=255, nullable=false)
     */
    private $libellecourtmoduleind;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailModulInd", type="string", length=255, nullable=false)
     */
    private $detailmodulind;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnHeures", type="smallint", nullable=false)
     */
    private $dureeenheures;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnSemaines", type="smallint", nullable=false)
     */
    private $dureeensemaines;



    /**
     * Get idmoduleindependant
     *
     * @return integer
     */
    public function getIdmoduleindependant()
    {
        return $this->idmoduleindependant;
    }

    /**
     * Set libellemoduleind
     *
     * @param string $libellemoduleind
     *
     * @return Moduleindependant
     */
    public function setLibellemoduleind($libellemoduleind)
    {
        $this->libellemoduleind = $libellemoduleind;

        return $this;
    }

    /**
     * Get libellemoduleind
     *
     * @return string
     */
    public function getLibellemoduleind()
    {
        return $this->libellemoduleind;
    }

    /**
     * Set libellecourtmoduleind
     *
     * @param string $libellecourtmoduleind
     *
     * @return Moduleindependant
     */
    public function setLibellecourtmoduleind($libellecourtmoduleind)
    {
        $this->libellecourtmoduleind = $libellecourtmoduleind;

        return $this;
    }

    /**
     * Get libellecourtmoduleind
     *
     * @return string
     */
    public function getLibellecourtmoduleind()
    {
        return $this->libellecourtmoduleind;
    }

    /**
     * Set detailmodulind
     *
     * @param string $detailmodulind
     *
     * @return Moduleindependant
     */
    public function setDetailmodulind($detailmodulind)
    {
        $this->detailmodulind = $detailmodulind;

        return $this;
    }

    /**
     * Get detailmodulind
     *
     * @return string
     */
    public function getDetailmodulind()
    {
        return $this->detailmodulind;
    }

    /**
     * Set dureeenheures
     *
     * @param integer $dureeenheures
     *
     * @return Moduleindependant
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
     * Set dureeensemaines
     *
     * @param integer $dureeensemaines
     *
     * @return Moduleindependant
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
}
