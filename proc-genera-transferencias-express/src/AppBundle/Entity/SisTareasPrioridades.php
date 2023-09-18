<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareasPrioridades
 *
 * @ORM\Table(name="sis_tareas_prioridades")
 * @ORM\Entity
 */
class SisTareasPrioridades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprioridad", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint", nullable=true)
     */
    private $orden;



    /**
     * Get idprioridad
     *
     * @return integer 
     */
    public function getIdprioridad()
    {
        return $this->idprioridad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisTareasPrioridades
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
     * Set estado
     *
     * @param integer $estado
     * @return SisTareasPrioridades
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return SisTareasPrioridades
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
