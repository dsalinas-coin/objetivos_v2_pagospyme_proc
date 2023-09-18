<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperacionesTarjeta
 *
 * @ORM\Table(name="operaciones_tarjeta")
 * @ORM\Entity
 */
class OperacionesTarjeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idoperacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="titulartarjeta", type="string", length=100, nullable=true)
     */
    private $titulartarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="dnititulartarjeta", type="string", length=50, nullable=true)
     */
    private $dnititulartarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombretarjeta", type="string", length=10, nullable=true)
     */
    private $nombretarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="numerotarjeta", type="string", length=20, nullable=true)
     */
    private $numerotarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="codseguridad", type="string", length=4, nullable=true)
     */
    private $codseguridad;

    /**
     * @var string
     *
     * @ORM\Column(name="vtotarjeta", type="string", length=7, nullable=true)
     */
    private $vtotarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuotas", type="smallint", nullable=true)
     */
    private $cuotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeporcuota", type="integer", nullable=true)
     */
    private $importeporcuota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adherirsedebito", type="boolean", nullable=true)
     */
    private $adherirsedebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;



    /**
     * Get idoperacion
     *
     * @return integer 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OperacionesTarjeta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return OperacionesTarjeta
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
     * Set idservicio
     *
     * @param integer $idservicio
     * @return OperacionesTarjeta
     */
    public function setIdservicio($idservicio)
    {
        $this->idservicio = $idservicio;

        return $this;
    }

    /**
     * Get idservicio
     *
     * @return integer 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set titulartarjeta
     *
     * @param string $titulartarjeta
     * @return OperacionesTarjeta
     */
    public function setTitulartarjeta($titulartarjeta)
    {
        $this->titulartarjeta = $titulartarjeta;

        return $this;
    }

    /**
     * Get titulartarjeta
     *
     * @return string 
     */
    public function getTitulartarjeta()
    {
        return $this->titulartarjeta;
    }

    /**
     * Set dnititulartarjeta
     *
     * @param string $dnititulartarjeta
     * @return OperacionesTarjeta
     */
    public function setDnititulartarjeta($dnititulartarjeta)
    {
        $this->dnititulartarjeta = $dnititulartarjeta;

        return $this;
    }

    /**
     * Get dnititulartarjeta
     *
     * @return string 
     */
    public function getDnititulartarjeta()
    {
        return $this->dnititulartarjeta;
    }

    /**
     * Set nombretarjeta
     *
     * @param string $nombretarjeta
     * @return OperacionesTarjeta
     */
    public function setNombretarjeta($nombretarjeta)
    {
        $this->nombretarjeta = $nombretarjeta;

        return $this;
    }

    /**
     * Get nombretarjeta
     *
     * @return string 
     */
    public function getNombretarjeta()
    {
        return $this->nombretarjeta;
    }

    /**
     * Set numerotarjeta
     *
     * @param string $numerotarjeta
     * @return OperacionesTarjeta
     */
    public function setNumerotarjeta($numerotarjeta)
    {
        $this->numerotarjeta = $numerotarjeta;

        return $this;
    }

    /**
     * Get numerotarjeta
     *
     * @return string 
     */
    public function getNumerotarjeta()
    {
        return $this->numerotarjeta;
    }

    /**
     * Set codseguridad
     *
     * @param string $codseguridad
     * @return OperacionesTarjeta
     */
    public function setCodseguridad($codseguridad)
    {
        $this->codseguridad = $codseguridad;

        return $this;
    }

    /**
     * Get codseguridad
     *
     * @return string 
     */
    public function getCodseguridad()
    {
        return $this->codseguridad;
    }

    /**
     * Set vtotarjeta
     *
     * @param string $vtotarjeta
     * @return OperacionesTarjeta
     */
    public function setVtotarjeta($vtotarjeta)
    {
        $this->vtotarjeta = $vtotarjeta;

        return $this;
    }

    /**
     * Get vtotarjeta
     *
     * @return string 
     */
    public function getVtotarjeta()
    {
        return $this->vtotarjeta;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return OperacionesTarjeta
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set cuotas
     *
     * @param integer $cuotas
     * @return OperacionesTarjeta
     */
    public function setCuotas($cuotas)
    {
        $this->cuotas = $cuotas;

        return $this;
    }

    /**
     * Get cuotas
     *
     * @return integer 
     */
    public function getCuotas()
    {
        return $this->cuotas;
    }

    /**
     * Set importeporcuota
     *
     * @param integer $importeporcuota
     * @return OperacionesTarjeta
     */
    public function setImporteporcuota($importeporcuota)
    {
        $this->importeporcuota = $importeporcuota;

        return $this;
    }

    /**
     * Get importeporcuota
     *
     * @return integer 
     */
    public function getImporteporcuota()
    {
        return $this->importeporcuota;
    }

    /**
     * Set adherirsedebito
     *
     * @param boolean $adherirsedebito
     * @return OperacionesTarjeta
     */
    public function setAdherirsedebito($adherirsedebito)
    {
        $this->adherirsedebito = $adherirsedebito;

        return $this;
    }

    /**
     * Get adherirsedebito
     *
     * @return boolean 
     */
    public function getAdherirsedebito()
    {
        return $this->adherirsedebito;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return OperacionesTarjeta
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return OperacionesTarjeta
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
}
