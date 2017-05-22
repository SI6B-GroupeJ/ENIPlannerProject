<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="Entreprise")
 * @ORM\Entity
 */
class Entreprise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodeEntreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="RaisonSociale", type="string", length=255, nullable=false)
     */
    private $raisonsociale;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse1", type="string", length=500, nullable=true)
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse2", type="string", length=500, nullable=true)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse3", type="string", length=500, nullable=true)
     */
    private $adresse3;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=14, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=14, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="SiteWeb", type="string", length=100, nullable=true)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Observation", type="text", length=-1, nullable=true)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTypeEntreprise", type="string", length=5, nullable=false)
     */
    private $codetypeentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeRegion", type="string", length=2, nullable=false)
     */
    private $coderegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeSecteur", type="integer", nullable=false)
     */
    private $codesecteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeOrganisme", type="integer", nullable=true)
     */
    private $codeorganisme;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCommercial", type="string", length=255, nullable=true)
     */
    private $nomcommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="siret", type="integer", nullable=true)
     */
    private $siret;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeContactEni", type="integer", nullable=true)
     */
    private $codecontacteni;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeOrganismeFavoris", type="integer", nullable=true)
     */
    private $codeorganismefavoris;



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
     * Set raisonsociale
     *
     * @param string $raisonsociale
     *
     * @return Entreprise
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    /**
     * Get raisonsociale
     *
     * @return string
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Entreprise
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     *
     * @return Entreprise
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set adresse3
     *
     * @param string $adresse3
     *
     * @return Entreprise
     */
    public function setAdresse3($adresse3)
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Get adresse3
     *
     * @return string
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Entreprise
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Entreprise
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Entreprise
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Entreprise
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     *
     * @return Entreprise
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Entreprise
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Entreprise
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set codetypeentreprise
     *
     * @param string $codetypeentreprise
     *
     * @return Entreprise
     */
    public function setCodetypeentreprise($codetypeentreprise)
    {
        $this->codetypeentreprise = $codetypeentreprise;

        return $this;
    }

    /**
     * Get codetypeentreprise
     *
     * @return string
     */
    public function getCodetypeentreprise()
    {
        return $this->codetypeentreprise;
    }

    /**
     * Set coderegion
     *
     * @param string $coderegion
     *
     * @return Entreprise
     */
    public function setCoderegion($coderegion)
    {
        $this->coderegion = $coderegion;

        return $this;
    }

    /**
     * Get coderegion
     *
     * @return string
     */
    public function getCoderegion()
    {
        return $this->coderegion;
    }

    /**
     * Set codesecteur
     *
     * @param integer $codesecteur
     *
     * @return Entreprise
     */
    public function setCodesecteur($codesecteur)
    {
        $this->codesecteur = $codesecteur;

        return $this;
    }

    /**
     * Get codesecteur
     *
     * @return integer
     */
    public function getCodesecteur()
    {
        return $this->codesecteur;
    }

    /**
     * Set codeorganisme
     *
     * @param integer $codeorganisme
     *
     * @return Entreprise
     */
    public function setCodeorganisme($codeorganisme)
    {
        $this->codeorganisme = $codeorganisme;

        return $this;
    }

    /**
     * Get codeorganisme
     *
     * @return integer
     */
    public function getCodeorganisme()
    {
        return $this->codeorganisme;
    }

    /**
     * Set nomcommercial
     *
     * @param string $nomcommercial
     *
     * @return Entreprise
     */
    public function setNomcommercial($nomcommercial)
    {
        $this->nomcommercial = $nomcommercial;

        return $this;
    }

    /**
     * Get nomcommercial
     *
     * @return string
     */
    public function getNomcommercial()
    {
        return $this->nomcommercial;
    }

    /**
     * Set siret
     *
     * @param integer $siret
     *
     * @return Entreprise
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return integer
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set codecontacteni
     *
     * @param integer $codecontacteni
     *
     * @return Entreprise
     */
    public function setCodecontacteni($codecontacteni)
    {
        $this->codecontacteni = $codecontacteni;

        return $this;
    }

    /**
     * Get codecontacteni
     *
     * @return integer
     */
    public function getCodecontacteni()
    {
        return $this->codecontacteni;
    }

    /**
     * Set codeorganismefavoris
     *
     * @param integer $codeorganismefavoris
     *
     * @return Entreprise
     */
    public function setCodeorganismefavoris($codeorganismefavoris)
    {
        $this->codeorganismefavoris = $codeorganismefavoris;

        return $this;
    }

    /**
     * Get codeorganismefavoris
     *
     * @return integer
     */
    public function getCodeorganismefavoris()
    {
        return $this->codeorganismefavoris;
    }
}
