<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chantier
 *
 * @ORM\Table(name="chantier")
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\ChantierRepository")
 */
class Chantier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idChantier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchantier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entrepreneur", mappedBy="idchantier")
     */
    private $identrepreneur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identrepreneur = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idchantier
     *
     * @return integer 
     */
    public function getIdchantier()
    {
        return $this->idchantier;
    }

    /**
     * Add identrepreneur
     *
     * @param \BatiBundle\Entity\Entrepreneur $identrepreneur
     * @return Chantier
     */
    public function addIdentrepreneur(\BatiBundle\Entity\Entrepreneur $identrepreneur)
    {
        $this->identrepreneur[] = $identrepreneur;

        return $this;
    }

    /**
     * Remove identrepreneur
     *
     * @param \BatiBundle\Entity\Entrepreneur $identrepreneur
     */
    public function removeIdentrepreneur(\BatiBundle\Entity\Entrepreneur $identrepreneur)
    {
        $this->identrepreneur->removeElement($identrepreneur);
    }

    /**
     * Get identrepreneur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdentrepreneur()
    {
        return $this->identrepreneur;
    }
}
