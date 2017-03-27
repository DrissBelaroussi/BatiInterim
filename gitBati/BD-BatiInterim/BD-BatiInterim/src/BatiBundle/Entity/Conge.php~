<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conge
 *
 * @ORM\Table(name="conge")
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\CongeRepository")
 */
class Conge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idConge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconge;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Artisan", mappedBy="idconge")
     */
    private $idartisan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idartisan = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idconge
     *
     * @return integer 
     */
    public function getIdconge()
    {
        return $this->idconge;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Conge
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
     * @return Conge
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
     * Add idartisan
     *
     * @param \BatiBundle\Entity\Artisan $idartisan
     * @return Conge
     */
    public function addIdartisan(\BatiBundle\Entity\Artisan $idartisan)
    {
        $this->idartisan[] = $idartisan;

        return $this;
    }

    /**
     * Remove idartisan
     *
     * @param \BatiBundle\Entity\Artisan $idartisan
     */
    public function removeIdartisan(\BatiBundle\Entity\Artisan $idartisan)
    {
        $this->idartisan->removeElement($idartisan);
    }

    /**
     * Get idartisan
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdartisan()
    {
        return $this->idartisan;
    }
}
