<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statutcalendrier
 *
 * @ORM\Table(name="StatutCalendrier")
 * @ORM\Entity
 */
class Statutcalendrier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdStatutCalendrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatutcalendrier;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleStatut", type="string", length=50, nullable=false)
     */
    private $libellestatut;



    /**
     * Get idstatutcalendrier
     *
     * @return integer
     */
    public function getIdstatutcalendrier()
    {
        return $this->idstatutcalendrier;
    }

    /**
     * Set libellestatut
     *
     * @param string $libellestatut
     *
     * @return Statutcalendrier
     */
    public function setLibellestatut($libellestatut)
    {
        $this->libellestatut = $libellestatut;

        return $this;
    }

    /**
     * Get libellestatut
     *
     * @return string
     */
    public function getLibellestatut()
    {
        return $this->libellestatut;
    }
}
