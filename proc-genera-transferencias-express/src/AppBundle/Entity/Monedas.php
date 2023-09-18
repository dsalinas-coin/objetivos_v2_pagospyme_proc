<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monedas
 *
 * @ORM\Table(name="monedas")
 * @ORM\Entity
 */
class Monedas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmoneda", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="simbolo", type="string", length=2, nullable=true)
     */
    private $simbolo;



    /**
     * Get idmoneda
     *
     * @return integer 
     */
    public function getIdmoneda()
    {
        return $this->idmoneda;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Monedas
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
     * Set simbolo
     *
     * @param string $simbolo
     * @return Monedas
     */
    public function setSimbolo($simbolo)
    {
        $this->simbolo = $simbolo;

        return $this;
    }

    /**
     * Get simbolo
     *
     * @return string 
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }
}
