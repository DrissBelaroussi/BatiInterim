<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chefchantier
 *
 * @ORM\Table(name="chefchantier", indexes={@ORM\Index(name="FK_ChefChantier_idChantier", columns={"idChantier"}), @ORM\Index(name="FK_ChefChantier_idEntrepreneur", columns={"idEntrepreneur"})})
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\ChefchantierRepository")
 */
class Chefchantier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idChefChantier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchefchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="nomChef", type="string", length=25, nullable=false)
     */
    private $nomchef;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomChef", type="string", length=25, nullable=false)
     */
    private $prenomchef;

    /**
     * @var \Chantier
     *
     * @ORM\ManyToOne(targetEntity="Chantier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChantier", referencedColumnName="idChantier")
     * })
     */
    private $idchantier;

    /**
     * @var \Entrepreneur
     *
     * @ORM\ManyToOne(targetEntity="Entrepreneur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntrepreneur", referencedColumnName="idEntrepreneur")
     * })
     */
    private $identrepreneur;



    /**
     * Get idchefchantier
     *
     * @return integer 
     */
    public function getIdchefchantier()
    {
        return $this->idchefchantier;
    }

    /**
     * Set nomchef
     *
     * @param string $nomchef
     * @return Chefchantier
     */
    public function setNomchef($nomchef)
    {
        $this->nomchef = $nomchef;

        return $this;
    }

    /**
     * Get nomchef
     *
     * @return string 
     */
    public function getNomchef()
    {
        return $this->nomchef;
    }

    /**
     * Set prenomchef
     *
     * @param string $prenomchef
     * @return Chefchantier
     */
    public function setPrenomchef($prenomchef)
    {
        $this->prenomchef = $prenomchef;

        return $this;
    }

    /**
     * Get prenomchef
     *
     * @return string 
     */
    public function getPrenomchef()
    {
        return $this->prenomchef;
    }

    /**
     * Set idchantier
     *
     * @param \BatiBundle\Entity\Chantier $idchantier
     * @return Chefchantier
     */
    public function setIdchantier(\BatiBundle\Entity\Chantier $idchantier = null)
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
     * Set identrepreneur
     *
     * @param \BatiBundle\Entity\Entrepreneur $identrepreneur
     * @return Chefchantier
     */
    public function setIdentrepreneur(\BatiBundle\Entity\Entrepreneur $identrepreneur = null)
    {
        $this->identrepreneur = $identrepreneur;

        return $this;
    }

    /**
     * Get identrepreneur
     *
     * @return \BatiBundle\Entity\Entrepreneur 
     */
    public function getIdentrepreneur()
    {
        return $this->identrepreneur;
    }
}
