<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduleparunite
 *
 * @ORM\Table(name="ModuleParUnite", indexes={@ORM\Index(name="IDX_53FF79899643ECE4", columns={"IdModule"}), @ORM\Index(name="IDX_53FF7989C51DBB99", columns={"IdUnite"})})
 * @ORM\Entity
 */
class Moduleparunite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Uniteparformation
     *
     * @ORM\ManyToOne(targetEntity="Uniteparformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUnite", referencedColumnName="Id")
     * })
     */
    private $idunite;



    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Moduleparunite
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

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
     * Set idmodule
     *
     * @param \GestionERPBundle\Entity\Module $idmodule
     *
     * @return Moduleparunite
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

    /**
     * Set idunite
     *
     * @param \GestionERPBundle\Entity\Uniteparformation $idunite
     *
     * @return Moduleparunite
     */
    public function setIdunite(\GestionERPBundle\Entity\Uniteparformation $idunite = null)
    {
        $this->idunite = $idunite;

        return $this;
    }

    /**
     * Get idunite
     *
     * @return \GestionERPBundle\Entity\Uniteparformation
     */
    public function getIdunite()
    {
        return $this->idunite;
    }
}
