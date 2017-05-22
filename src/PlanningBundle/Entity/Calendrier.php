<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendrier
 *
 * @ORM\Table(name="Calendrier", indexes={@ORM\Index(name="IDX_FD283F69802EC04F", columns={"IdModeleCalendrier"}), @ORM\Index(name="IDX_FD283F69CFE6EC9F", columns={"IdStatutCalendrier"})})
 * @ORM\Entity
 */
class Calendrier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCalendrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcalendrier;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeStagiaire", type="integer", nullable=true)
     */
    private $codestagiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeEntreprise", type="integer", nullable=true)
     */
    private $codeentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=50, nullable=true)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebutFormation", type="datetime", nullable=true)
     */
    private $datedebutformation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinFormation", type="datetime", nullable=true)
     */
    private $datefinformation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModifCalendrier", type="datetime", nullable=true)
     */
    private $datemodifcalendrier;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeFormation", type="string", length=50, nullable=true)
     */
    private $typeformation;

    /**
     * @var \Modelecalendrier
     *
     * @ORM\ManyToOne(targetEntity="Modelecalendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdModeleCalendrier", referencedColumnName="IdModeleCalendrier")
     * })
     */
    private $idmodelecalendrier;

    /**
     * @var \Statutcalendrier
     *
     * @ORM\ManyToOne(targetEntity="Statutcalendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdStatutCalendrier", referencedColumnName="IdStatutCalendrier")
     * })
     */
    private $idstatutcalendrier;



    /**
     * Get idcalendrier
     *
     * @return integer
     */
    public function getIdcalendrier()
    {
        return $this->idcalendrier;
    }

    /**
     * Set codestagiaire
     *
     * @param integer $codestagiaire
     *
     * @return Calendrier
     */
    public function setCodestagiaire($codestagiaire)
    {
        $this->codestagiaire = $codestagiaire;

        return $this;
    }

    /**
     * Get codestagiaire
     *
     * @return integer
     */
    public function getCodestagiaire()
    {
        return $this->codestagiaire;
    }

    /**
     * Set codeentreprise
     *
     * @param integer $codeentreprise
     *
     * @return Calendrier
     */
    public function setCodeentreprise($codeentreprise)
    {
        $this->codeentreprise = $codeentreprise;

        return $this;
    }

    /**
     * Get codeentreprise
     *
     * @return integer
     */
    public function getCodeentreprise()
    {
        return $this->codeentreprise;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Calendrier
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set datedebutformation
     *
     * @param \DateTime $datedebutformation
     *
     * @return Calendrier
     */
    public function setDatedebutformation($datedebutformation)
    {
        $this->datedebutformation = $datedebutformation;

        return $this;
    }

    /**
     * Get datedebutformation
     *
     * @return \DateTime
     */
    public function getDatedebutformation()
    {
        return $this->datedebutformation;
    }

    /**
     * Set datefinformation
     *
     * @param \DateTime $datefinformation
     *
     * @return Calendrier
     */
    public function setDatefinformation($datefinformation)
    {
        $this->datefinformation = $datefinformation;

        return $this;
    }

    /**
     * Get datefinformation
     *
     * @return \DateTime
     */
    public function getDatefinformation()
    {
        return $this->datefinformation;
    }

    /**
     * Set datemodifcalendrier
     *
     * @param \DateTime $datemodifcalendrier
     *
     * @return Calendrier
     */
    public function setDatemodifcalendrier($datemodifcalendrier)
    {
        $this->datemodifcalendrier = $datemodifcalendrier;

        return $this;
    }

    /**
     * Get datemodifcalendrier
     *
     * @return \DateTime
     */
    public function getDatemodifcalendrier()
    {
        return $this->datemodifcalendrier;
    }

    /**
     * Set typeformation
     *
     * @param string $typeformation
     *
     * @return Calendrier
     */
    public function setTypeformation($typeformation)
    {
        $this->typeformation = $typeformation;

        return $this;
    }

    /**
     * Get typeformation
     *
     * @return string
     */
    public function getTypeformation()
    {
        return $this->typeformation;
    }

    /**
     * Set idmodelecalendrier
     *
     * @param \PlanningBundle\Entity\Modelecalendrier $idmodelecalendrier
     *
     * @return Calendrier
     */
    public function setIdmodelecalendrier(\PlanningBundle\Entity\Modelecalendrier $idmodelecalendrier = null)
    {
        $this->idmodelecalendrier = $idmodelecalendrier;

        return $this;
    }

    /**
     * Get idmodelecalendrier
     *
     * @return \PlanningBundle\Entity\Modelecalendrier
     */
    public function getIdmodelecalendrier()
    {
        return $this->idmodelecalendrier;
    }

    /**
     * Set idstatutcalendrier
     *
     * @param \PlanningBundle\Entity\Statutcalendrier $idstatutcalendrier
     *
     * @return Calendrier
     */
    public function setIdstatutcalendrier(\PlanningBundle\Entity\Statutcalendrier $idstatutcalendrier = null)
    {
        $this->idstatutcalendrier = $idstatutcalendrier;

        return $this;
    }

    /**
     * Get idstatutcalendrier
     *
     * @return \PlanningBundle\Entity\Statutcalendrier
     */
    public function getIdstatutcalendrier()
    {
        return $this->idstatutcalendrier;
    }
}
