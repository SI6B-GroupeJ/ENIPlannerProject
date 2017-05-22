<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enchainementmodule
 *
 * @ORM\Table(name="EnchainementModule", indexes={@ORM\Index(name="IDX_BB2675E128B0F9AB", columns={"IdCalendrier"}), @ORM\Index(name="IDX_BB2675E1E7FED6FD", columns={"IdModuleIndependant"})})
 * @ORM\Entity
 */
class Enchainementmodule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEnchainement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idenchainement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdModule", type="integer", nullable=false)
     */
    private $idmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnSemaines", type="smallint", nullable=false)
     */
    private $dureeensemaines;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnHeures", type="smallint", nullable=false)
     */
    private $dureeenheures;

    /**
     * @var \Calendrier
     *
     * @ORM\ManyToOne(targetEntity="Calendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCalendrier", referencedColumnName="IdCalendrier")
     * })
     */
    private $idcalendrier;

    /**
     * @var \Moduleindependant
     *
     * @ORM\ManyToOne(targetEntity="GestionModuleBundle\Entity\Moduleindependant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdModuleIndependant", referencedColumnName="IdModuleIndependant")
     * })
     */
    private $idmoduleindependant;



    /**
     * Get idenchainement
     *
     * @return integer
     */
    public function getIdenchainement()
    {
        return $this->idenchainement;
    }

    /**
     * Set idmodule
     *
     * @param integer $idmodule
     *
     * @return Enchainementmodule
     */
    public function setIdmodule($idmodule)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return integer
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set dureeensemaines
     *
     * @param integer $dureeensemaines
     *
     * @return Enchainementmodule
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
     * Set dureeenheures
     *
     * @param integer $dureeenheures
     *
     * @return Enchainementmodule
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
     * Set idcalendrier
     *
     * @param \PlanningBundle\Entity\Calendrier $idcalendrier
     *
     * @return Enchainementmodule
     */
    public function setIdcalendrier(\PlanningBundle\Entity\Calendrier $idcalendrier = null)
    {
        $this->idcalendrier = $idcalendrier;

        return $this;
    }

    /**
     * Get idcalendrier
     *
     * @return \PlanningBundle\Entity\Calendrier
     */
    public function getIdcalendrier()
    {
        return $this->idcalendrier;
    }

    /**
     * Set idmoduleindependant
     *
     * @param \PlanningBundle\Entity\Moduleindependant $idmoduleindependant
     *
     * @return Enchainementmodule
     */
    public function setIdmoduleindependant(\PlanningBundle\Entity\Moduleindependant $idmoduleindependant = null)
    {
        $this->idmoduleindependant = $idmoduleindependant;

        return $this;
    }

    /**
     * Get idmoduleindependant
     *
     * @return \GestionModuleBundle\Entity\Moduleindependant
     */
    public function getIdmoduleindependant()
    {
        return $this->idmoduleindependant;
    }
}
