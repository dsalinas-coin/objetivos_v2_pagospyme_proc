<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareasEstadosdet
 *
 * @ORM\Table(name="sis_tareas_estadosdet")
 * @ORM\Entity
 */
class SisTareasEstadosdet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint", nullable=true)
     */
    private $orden;



    /**
     * Get idestado
     *
     * @return integer 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisTareasEstadosdet
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
     * @return SisTareasEstadosdet
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
