<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasTiposreclamo
 *
 * @ORM\Table(name="notas_tiposreclamo")
 * @ORM\Entity
 */
class NotasTiposreclamo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtiporeclamo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtiporeclamo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idtiporeclamo
     *
     * @return integer 
     */
    public function getIdtiporeclamo()
    {
        return $this->idtiporeclamo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NotasTiposreclamo
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
}
