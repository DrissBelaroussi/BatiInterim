<?php

namespace BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corpsmetier
 *
 * @ORM\Table(name="corpsmetier")
 * @ORM\Entity(repositoryClass="BatiBundle\Entity\CorpsmetierRepository")
 */
class Corpsmetier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCorpsMetier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorpsmetier;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;



    /**
     * Get idcorpsmetier
     *
     * @return integer 
     */
    public function getIdcorpsmetier()
    {
        return $this->idcorpsmetier;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Corpsmetier
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
