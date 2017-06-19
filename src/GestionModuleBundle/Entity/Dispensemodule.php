<?php

namespace GestionModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispensemodule
 *
 * @ORM\Table(name="DispenseModule", indexes={@ORM\Index(name="IDX_4F4A32E2CD12CAB2", columns={"IdEnchainement"})})
 * @ORM\Entity
 */
class Dispensemodule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDispense", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddispense;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebutModule", type="datetime", nullable=false)
     */
    private $datedebutmodule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinModule", type="datetime", nullable=false)
     */
    private $datefinmodule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsDispense", type="boolean", nullable=true)
     */
    private $isdispense;

    /**
     * @var \Enchainementmodule
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Enchainementmodule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdEnchainement", referencedColumnName="IdEnchainement")
     * })
     */
    private $idenchainement;



    /**
     * Get iddispense
     *
     * @return integer
     */
    public function getIddispense()
    {
        return $this->iddispense;
    }

    /**
     * Set datedebutmodule
     *
     * @param \DateTime $datedebutmodule
     *
     * @return Dispensemodule
     */
    public function setDatedebutmodule($datedebutmodule)
    {
        $this->datedebutmodule = $datedebutmodule;

        return $this;
    }

    /**
     * Get datedebutmodule
     *
     * @return \DateTime
     */
    public function getDatedebutmodule()
    {
        return $this->datedebutmodule;
    }

    /**
     * Set datefinmodule
     *
     * @param \DateTime $datefinmodule
     *
     * @return Dispensemodule
     */
    public function setDatefinmodule($datefinmodule)
    {
        $this->datefinmodule = $datefinmodule;

        return $this;
    }

    /**
     * Get datefinmodule
     *
     * @return \DateTime
     */
    public function getDatefinmodule()
    {
        return $this->datefinmodule;
    }

    /**
     * Set isdispense
     *
     * @param boolean $isdispense
     *
     * @return Dispensemodule
     */
    public function setIsdispense($isdispense)
    {
        $this->isdispense = $isdispense;

        return $this;
    }

    /**
     * Get isdispense
     *
     * @return boolean
     */
    public function getIsdispense()
    {
        return $this->isdispense;
    }

    /**
     * Set idenchainement
     *
     * @param \PlanningBundle\Entity\Enchainementmodule $idenchainement
     *
     * @return Dispensemodule
     */
    public function setIdenchainement(\PlanningBundle\Entity\Enchainementmodule $idenchainement = null)
    {
        $this->idenchainement = $idenchainement;

        return $this;
    }

    /**
     * Get idenchainement
     *
     * @return \PlanningBundle\Entity\Enchainementmodule
     */
    public function getIdenchainement()
    {
        return $this->idenchainement;
    }
}
