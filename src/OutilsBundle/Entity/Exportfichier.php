<?php

namespace OutilsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exportfichier
 *
 * @ORM\Table(name="ExportFichier", indexes={@ORM\Index(name="IDX_6CB659FA28B0F9AB", columns={"IdCalendrier"})})
 * @ORM\Entity
 */
class Exportfichier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdExportFichier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexportfichier;

    /**
     * @var string
     *
     * @ORM\Column(name="UrlPDF", type="string", length=255, nullable=true)
     */
    private $urlpdf;

    /**
     * @var string
     *
     * @ORM\Column(name="UrlRTF", type="string", length=255, nullable=true)
     */
    private $urlrtf;

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
     * Get idexportfichier
     *
     * @return integer
     */
    public function getIdexportfichier()
    {
        return $this->idexportfichier;
    }

    /**
     * Set urlpdf
     *
     * @param string $urlpdf
     *
     * @return Exportfichier
     */
    public function setUrlpdf($urlpdf)
    {
        $this->urlpdf = $urlpdf;

        return $this;
    }

    /**
     * Get urlpdf
     *
     * @return string
     */
    public function getUrlpdf()
    {
        return $this->urlpdf;
    }

    /**
     * Set urlrtf
     *
     * @param string $urlrtf
     *
     * @return Exportfichier
     */
    public function setUrlrtf($urlrtf)
    {
        $this->urlrtf = $urlrtf;

        return $this;
    }

    /**
     * Get urlrtf
     *
     * @return string
     */
    public function getUrlrtf()
    {
        return $this->urlrtf;
    }

    /**
     * Set idcalendrier
     *
     * @param \PlanningBundle\Entity\Calendrier $idcalendrier
     *
     * @return Exportfichier
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
