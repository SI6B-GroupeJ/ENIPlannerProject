<?php

namespace OutilsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purge
 *
 * @ORM\Table(name="Purge", indexes={@ORM\Index(name="IDX_E2C1BCF128B0F9AB", columns={"IdCalendrier"})})
 * @ORM\Entity
 */
class Purge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPurge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpurge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDePurge", type="datetime", nullable=false)
     */
    private $datedepurge;

    /**
     * @var \Calendrier
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Calendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCalendrier", referencedColumnName="IdCalendrier")
     * })
     */
    private $idcalendrier;



    /**
     * Get idpurge
     *
     * @return integer
     */
    public function getIdpurge()
    {
        return $this->idpurge;
    }

    /**
     * Set datedepurge
     *
     * @param \DateTime $datedepurge
     *
     * @return Purge
     */
    public function setDatedepurge($datedepurge)
    {
        $this->datedepurge = $datedepurge;

        return $this;
    }

    /**
     * Get datedepurge
     *
     * @return \DateTime
     */
    public function getDatedepurge()
    {
        return $this->datedepurge;
    }

    /**
     * Set idcalendrier
     *
     * @param \PlanningBundle\Entity\Calendrier $idcalendrier
     *
     * @return Purge
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
}
