<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniteparformation
 *
 * @ORM\Table(name="UniteParFormation", indexes={@ORM\Index(name="IDX_C1E36CE8A68ED5A2", columns={"CodeFormation"}), @ORM\Index(name="IDX_C1E36CE86837EF81", columns={"IdUniteFormation"})})
 * @ORM\Entity
 */
class Uniteparformation
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
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeFormation", referencedColumnName="CodeFormation")
     * })
     */
    private $codeformation;

    /**
     * @var \Uniteformation
     *
     * @ORM\ManyToOne(targetEntity="Uniteformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUniteFormation", referencedColumnName="IdUniteFormation")
     * })
     */
    private $iduniteformation;



    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Uniteparformation
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
     * Set codeformation
     *
     * @param \GestionERPBundle\Entity\Formation $codeformation
     *
     * @return Uniteparformation
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

    /**
     * Set iduniteformation
     *
     * @param \GestionERPBundle\Entity\Uniteformation $iduniteformation
     *
     * @return Uniteparformation
     */
    public function setIduniteformation(\GestionERPBundle\Entity\Uniteformation $iduniteformation = null)
    {
        $this->iduniteformation = $iduniteformation;

        return $this;
    }

    /**
     * Get iduniteformation
     *
     * @return \GestionERPBundle\Entity\Uniteformation
     */
    public function getIduniteformation()
    {
        return $this->iduniteformation;
    }
}
