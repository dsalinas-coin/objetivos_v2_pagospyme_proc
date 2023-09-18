<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diassemana
 *
 * @ORM\Table(name="diassemana")
 * @ORM\Entity
 */
class Diassemana
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddiasemana", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddiasemana;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=15, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=3, nullable=true)
     */
    private $abreviatura;



    /**
     * Get iddiasemana
     *
     * @return integer 
     */
    public function getIddiasemana()
    {
        return $this->iddiasemana;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Diassemana
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return Diassemana
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }
}
