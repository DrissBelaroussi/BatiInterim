<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission", indexes={@ORM\Index(name="FK_Mission_idChantier", columns={"idChantier"}), @ORM\Index(name="FK_Mission_idCorpsMetier", columns={"idCorpsMetier"})})
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\MissionRepository")
 */
class Mission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmission;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=50, nullable=false)
     */
    private $intitule;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbArtisans", type="integer", nullable=false)
     */
    private $nbartisans;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var float
     *
     * @ORM\Column(name="prixJournalier", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixjournalier;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=45, nullable=false)
     */
    private $lieu;

    /**
     * @var \Chantier
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Chantier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChantier", referencedColumnName="idChantier")
     * })
     */
    private $idchantier;

    /**
     * @var \Corpsmetier
     *
     * @ORM\ManyToOne(targetEntity="Corpsmetier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCorpsMetier", referencedColumnName="idCorpsMetier")
     * })
     */
    private $idcorpsmetier;



    /**
     * Set idmission
     *
     * @param integer $idmission
     * @return Mission
     */
    public function setIdmission($idmission)
    {
        $this->idmission = $idmission;

        return $this;
    }

    /**
     * Get idmission
     *
     * @return integer 
     */
    public function getIdmission()
    {
        return $this->idmission;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Mission
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set nbartisans
     *
     * @param integer $nbartisans
     * @return Mission
     */
    public function setNbartisans($nbartisans)
    {
        $this->nbartisans = $nbartisans;

        return $this;
    }

    /**
     * Get nbartisans
     *
     * @return integer 
     */
    public function getNbartisans()
    {
        return $this->nbartisans;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Mission
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Mission
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set prixjournalier
     *
     * @param float $prixjournalier
     * @return Mission
     */
    public function setPrixjournalier($prixjournalier)
    {
        $this->prixjournalier = $prixjournalier;

        return $this;
    }

    /**
     * Get prixjournalier
     *
     * @return float 
     */
    public function getPrixjournalier()
    {
        return $this->prixjournalier;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Mission
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
     * Set idchantier
     *
     * @param \BatiBundle\Entity\Chantier $idchantier
     * @return Mission
     */
    public function setIdchantier(\BatiBundle\Entity\Chantier $idchantier)
    {
        $this->idchantier = $idchantier;

        return $this;
    }

    /**
     * Get idchantier
     *
     * @return \BatiBundle\Entity\Chantier 
     */
    public function getIdchantier()
    {
        return $this->idchantier;
    }

    /**
     * Set idcorpsmetier
     *
     * @param \BatiBundle\Entity\Corpsmetier $idcorpsmetier
     * @return Mission
     */
    public function setIdcorpsmetier(\BatiBundle\Entity\Corpsmetier $idcorpsmetier = null)
    {
        $this->idcorpsmetier = $idcorpsmetier;

        return $this;
    }

    /**
     * Get idcorpsmetier
     *
     * @return \BatiBundle\Entity\Corpsmetier 
     */
    public function getIdcorpsmetier()
    {
        return $this->idcorpsmetier;
    }
}
