<?php

namespace OutilsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historisation
 *
 * @ORM\Table(name="Historisation")
 * @ORM\Entity(repositoryClass="OutilsBundle\Repository\HistorisationRepository")
 */
class Historisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdHistorisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistorisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Detail", type="string", length=255, nullable=false)
     */
    private $detail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHeureModif", type="datetime", nullable=false)
     */
    private $dateheuremodif;



    /**
     * Get idhistorisation
     *
     * @return integer
     */
    public function getIdhistorisation()
    {
        return $this->idhistorisation;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Historisation
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set dateheuremodif
     *
     * @param \DateTime $dateheuremodif
     *
     * @return Historisation
     */
    public function setDateheuremodif($dateheuremodif)
    {
        $this->dateheuremodif = $dateheuremodif;

        return $this;
    }

    /**
     * Get dateheuremodif
     *
     * @return \DateTime
     */
    public function getDateheuremodif()
    {
        return $this->dateheuremodif;
    }
}
