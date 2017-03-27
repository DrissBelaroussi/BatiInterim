<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrepreneur
 *
 * @ORM\Table(name="entrepreneur", indexes={@ORM\Index(name="FK_Entrepreneur_idSecteur", columns={"idSecteur"})})
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\EntrepreneurRepository")
 */
class Entrepreneur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEntrepreneur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identrepreneur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSociete", type="string", length=25, nullable=false)
     */
    private $nomsociete;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneSociete", type="string", length=25, nullable=false)
     */
    private $telephonesociete;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseSociete", type="string", length=50, nullable=false)
     */
    private $adressesociete;

    /**
     * @var string
     *
     * @ORM\Column(name="cpSociete", type="string", length=5, nullable=false)
     */
    private $cpsociete;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var \Secteur
     *
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSecteur", referencedColumnName="idSecteur")
     * })
     */
    private $idsecteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Chantier", inversedBy="identrepreneur")
     * @ORM\JoinTable(name="creer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idEntrepreneur", referencedColumnName="idEntrepreneur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idChantier", referencedColumnName="idChantier")
     *   }
     * )
     */
    private $idchantier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idchantier = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get identrepreneur
     *
     * @return integer 
     */
    public function getIdentrepreneur()
    {
        return $this->identrepreneur;
    }

    /**
     * Set nomsociete
     *
     * @param string $nomsociete
     * @return Entrepreneur
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string 
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set telephonesociete
     *
     * @param string $telephonesociete
     * @return Entrepreneur
     */
    public function setTelephonesociete($telephonesociete)
    {
        $this->telephonesociete = $telephonesociete;

        return $this;
    }

    /**
     * Get telephonesociete
     *
     * @return string 
     */
    public function getTelephonesociete()
    {
        return $this->telephonesociete;
    }

    /**
     * Set adressesociete
     *
     * @param string $adressesociete
     * @return Entrepreneur
     */
    public function setAdressesociete($adressesociete)
    {
        $this->adressesociete = $adressesociete;

        return $this;
    }

    /**
     * Get adressesociete
     *
     * @return string 
     */
    public function getAdressesociete()
    {
        return $this->adressesociete;
    }

    /**
     * Set cpsociete
     *
     * @param string $cpsociete
     * @return Entrepreneur
     */
    public function setCpsociete($cpsociete)
    {
        $this->cpsociete = $cpsociete;

        return $this;
    }

    /**
     * Get cpsociete
     *
     * @return string 
     */
    public function getCpsociete()
    {
        return $this->cpsociete;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Entrepreneur
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
     * Set idsecteur
     *
     * @param \BatiBundle\Entity\Secteur $idsecteur
     * @return Entrepreneur
     */
    public function setIdsecteur(\BatiBundle\Entity\Secteur $idsecteur = null)
    {
        $this->idsecteur = $idsecteur;

        return $this;
    }

    /**
     * Get idsecteur
     *
     * @return \BatiBundle\Entity\Secteur 
     */
    public function getIdsecteur()
    {
        return $this->idsecteur;
    }

    /**
     * Add idchantier
     *
     * @param \BatiBundle\Entity\Chantier $idchantier
     * @return Entrepreneur
     */
    public function addIdchantier(\BatiBundle\Entity\Chantier $idchantier)
    {
        $this->idchantier[] = $idchantier;

        return $this;
    }

    /**
     * Remove idchantier
     *
     * @param \BatiBundle\Entity\Chantier $idchantier
     */
    public function removeIdchantier(\BatiBundle\Entity\Chantier $idchantier)
    {
        $this->idchantier->removeElement($idchantier);
    }

    /**
     * Get idchantier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdchantier()
    {
        return $this->idchantier;
    }
}
