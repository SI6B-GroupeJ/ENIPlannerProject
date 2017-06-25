<?php

namespace GestionERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 *
 * @ORM\Table(name="Stagiaire")
 * @ORM\Entity
 */
class Stagiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodeStagiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codestagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Civilite", type="string", length=3, nullable=true)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse1", type="string", length=500, nullable=false)
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
     * @ORM\Column(name="Codepostal", type="string", length=5, nullable=true)
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
     * @ORM\Column(name="TelephoneFixe", type="string", length=14, nullable=true)
     */
    private $telephonefixe;

    /**
     * @var string
     *
     * @ORM\Column(name="TelephonePortable", type="string", length=14, nullable=true)
     */
    private $telephoneportable;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="datetime", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeRegion", type="string", length=2, nullable=true)
     */
    private $coderegion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeNationalite", type="string", length=2, nullable=true)
     */
    private $codenationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeOrigineMedia", type="string", length=3, nullable=true)
     */
    private $codeoriginemedia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDernierEnvoiDoc", type="datetime", nullable=true)
     */
    private $datedernierenvoidoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="Repertoire", type="string", length=100, nullable=true)
     */
    private $repertoire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Permis", type="boolean", nullable=false)
     */
    private $permis = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=100, nullable=true)
     */
    private $photo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnvoiDocEnCours", type="boolean", nullable=false)
     */
    private $envoidocencours = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Historique", type="text", length=-1, nullable=true)
     */
    private $historique;



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
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Stagiaire
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Stagiaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Stagiaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Stagiaire
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
     * @return Stagiaire
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
     * @return Stagiaire
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
     * @return Stagiaire
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
     * @return Stagiaire
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
     * Set telephonefixe
     *
     * @param string $telephonefixe
     *
     * @return Stagiaire
     */
    public function setTelephonefixe($telephonefixe)
    {
        $this->telephonefixe = $telephonefixe;

        return $this;
    }

    /**
     * Get telephonefixe
     *
     * @return string
     */
    public function getTelephonefixe()
    {
        return $this->telephonefixe;
    }

    /**
     * Set telephoneportable
     *
     * @param string $telephoneportable
     *
     * @return Stagiaire
     */
    public function setTelephoneportable($telephoneportable)
    {
        $this->telephoneportable = $telephoneportable;

        return $this;
    }

    /**
     * Get telephoneportable
     *
     * @return string
     */
    public function getTelephoneportable()
    {
        return $this->telephoneportable;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Stagiaire
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
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Stagiaire
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set coderegion
     *
     * @param string $coderegion
     *
     * @return Stagiaire
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
     * Set codenationalite
     *
     * @param string $codenationalite
     *
     * @return Stagiaire
     */
    public function setCodenationalite($codenationalite)
    {
        $this->codenationalite = $codenationalite;

        return $this;
    }

    /**
     * Get codenationalite
     *
     * @return string
     */
    public function getCodenationalite()
    {
        return $this->codenationalite;
    }

    /**
     * Set codeoriginemedia
     *
     * @param string $codeoriginemedia
     *
     * @return Stagiaire
     */
    public function setCodeoriginemedia($codeoriginemedia)
    {
        $this->codeoriginemedia = $codeoriginemedia;

        return $this;
    }

    /**
     * Get codeoriginemedia
     *
     * @return string
     */
    public function getCodeoriginemedia()
    {
        return $this->codeoriginemedia;
    }

    /**
     * Set datedernierenvoidoc
     *
     * @param \DateTime $datedernierenvoidoc
     *
     * @return Stagiaire
     */
    public function setDatedernierenvoidoc($datedernierenvoidoc)
    {
        $this->datedernierenvoidoc = $datedernierenvoidoc;

        return $this;
    }

    /**
     * Get datedernierenvoidoc
     *
     * @return \DateTime
     */
    public function getDatedernierenvoidoc()
    {
        return $this->datedernierenvoidoc;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Stagiaire
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set repertoire
     *
     * @param string $repertoire
     *
     * @return Stagiaire
     */
    public function setRepertoire($repertoire)
    {
        $this->repertoire = $repertoire;

        return $this;
    }

    /**
     * Get repertoire
     *
     * @return string
     */
    public function getRepertoire()
    {
        return $this->repertoire;
    }

    /**
     * Set permis
     *
     * @param boolean $permis
     *
     * @return Stagiaire
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return boolean
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Stagiaire
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set envoidocencours
     *
     * @param boolean $envoidocencours
     *
     * @return Stagiaire
     */
    public function setEnvoidocencours($envoidocencours)
    {
        $this->envoidocencours = $envoidocencours;

        return $this;
    }

    /**
     * Get envoidocencours
     *
     * @return boolean
     */
    public function getEnvoidocencours()
    {
        return $this->envoidocencours;
    }

    /**
     * Set historique
     *
     * @param string $historique
     *
     * @return Stagiaire
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return string
     */
    public function getHistorique()
    {
        return $this->historique;
    }
}
