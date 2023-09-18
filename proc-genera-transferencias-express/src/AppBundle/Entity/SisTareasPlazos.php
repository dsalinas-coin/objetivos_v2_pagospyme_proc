<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareasPlazos
 *
 * @ORM\Table(name="sis_tareas_plazos")
 * @ORM\Entity
 */
class SisTareasPlazos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplazo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplazo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint", nullable=true)
     */
    private $orden;



    /**
     * Get idplazo
     *
     * @return integer 
     */
    public function getIdplazo()
    {
        return $this->idplazo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisTareasPlazos
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
     * Set orden
     *
     * @param integer $orden
     * @return SisTareasPlazos
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
