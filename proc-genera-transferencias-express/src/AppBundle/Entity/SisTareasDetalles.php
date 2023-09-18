<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareasDetalles
 *
 * @ORM\Table(name="sis_tareas_detalles")
 * @ORM\Entity
 */
class SisTareasDetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtarea_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtareaDetalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtarea", type="integer", nullable=true)
     */
    private $idtarea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestinicio", type="datetime", nullable=true)
     */
    private $fechaestinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="datetime", nullable=true)
     */
    private $fechafin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestfin", type="datetime", nullable=true)
     */
    private $fechaestfin;

    /**
     * @var integer
     *
     * @ORM\Column(name="progreso", type="smallint", nullable=true)
     */
    private $progreso;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=1000, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint", nullable=true)
     */
    private $orden;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="smallint", nullable=true)
     */
    private $idestado;

    /**
     * @var integer
     *
     * @ORM\Column(name="pasounico", type="smallint", nullable=true)
     */
    private $pasounico;



    /**
     * Get idtareaDetalle
     *
     * @return integer 
     */
    public function getIdtareaDetalle()
    {
        return $this->idtareaDetalle;
    }

    /**
     * Set idtarea
     *
     * @param integer $idtarea
     * @return SisTareasDetalles
     */
    public function setIdtarea($idtarea)
    {
        $this->idtarea = $idtarea;

        return $this;
    }

    /**
     * Get idtarea
     *
     * @return integer 
     */
    public function getIdtarea()
    {
        return $this->idtarea;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SisTareasDetalles
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return SisTareasDetalles
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechaestinicio
     *
     * @param \DateTime $fechaestinicio
     * @return SisTareasDetalles
     */
    public function setFechaestinicio($fechaestinicio)
    {
        $this->fechaestinicio = $fechaestinicio;

        return $this;
    }

    /**
     * Get fechaestinicio
     *
     * @return \DateTime 
     */
    public function getFechaestinicio()
    {
        return $this->fechaestinicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return SisTareasDetalles
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set fechaestfin
     *
     * @param \DateTime $fechaestfin
     * @return SisTareasDetalles
     */
    public function setFechaestfin($fechaestfin)
    {
        $this->fechaestfin = $fechaestfin;

        return $this;
    }

    /**
     * Get fechaestfin
     *
     * @return \DateTime 
     */
    public function getFechaestfin()
    {
        return $this->fechaestfin;
    }

    /**
     * Set progreso
     *
     * @param integer $progreso
     * @return SisTareasDetalles
     */
    public function setProgreso($progreso)
    {
        $this->progreso = $progreso;

        return $this;
    }

    /**
     * Get progreso
     *
     * @return integer 
     */
    public function getProgreso()
    {
        return $this->progreso;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisTareasDetalles
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return SisTareasDetalles
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return SisTareasDetalles
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

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return SisTareasDetalles
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set idestado
     *
     * @param integer $idestado
     * @return SisTareasDetalles
     */
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

        return $this;
    }

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
     * Set pasounico
     *
     * @param integer $pasounico
     * @return SisTareasDetalles
     */
    public function setPasounico($pasounico)
    {
        $this->pasounico = $pasounico;

        return $this;
    }

    /**
     * Get pasounico
     *
     * @return integer 
     */
    public function getPasounico()
    {
        return $this->pasounico;
    }
}
