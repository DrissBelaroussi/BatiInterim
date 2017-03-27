<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affecter
 *
 * @ORM\Table(name="affecter", indexes={@ORM\Index(name="FK_Affecter_idChantier", columns={"idChantier"}), @ORM\Index(name="FK_Affecter_idArtisan", columns={"idArtisan"}), @ORM\Index(name="IDX_C290057A80DE99CE", columns={"idMission"})})
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\AffecterRepository")
 */
class Affecter
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="etatAffectation", type="boolean", nullable=false)
     */
    private $etataffectation;

    /**
     * @var \Artisan
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Artisan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idArtisan", referencedColumnName="idArtisan")
     * })
     */
    private $idartisan;

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
     * @var \Mission
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMission", referencedColumnName="idMission")
     * })
     */
    private $idmission;



    /**
     * Set etataffectation
     *
     * @param boolean $etataffectation
     * @return Affecter
     */
    public function setEtataffectation($etataffectation)
    {
        $this->etataffectation = $etataffectation;

        return $this;
    }

    /**
     * Get etataffectation
     *
     * @return boolean 
     */
    public function getEtataffectation()
    {
        return $this->etataffectation;
    }

    /**
     * Set idartisan
     *
     * @param \BatiBundle\Entity\Artisan $idartisan
     * @return Affecter
     */
    public function setIdartisan(\BatiBundle\Entity\Artisan $idartisan)
    {
        $this->idartisan = $idartisan;

        return $this;
    }

    /**
     * Get idartisan
     *
     * @return \BatiBundle\Entity\Artisan 
     */
    public function getIdartisan()
    {
        return $this->idartisan;
    }

    /**
     * Set idchantier
     *
     * @param \BatiBundle\Entity\Chantier $idchantier
     * @return Affecter
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
     * Set idmission
     *
     * @param \BatiBundle\Entity\Mission $idmission
     * @return Affecter
     */
    public function setIdmission(\BatiBundle\Entity\Mission $idmission)
    {
        $this->idmission = $idmission;

        return $this;
    }

    /**
     * Get idmission
     *
     * @return \BatiBundle\Entity\Mission 
     */
    public function getIdmission()
    {
        return $this->idmission;
    }
}
