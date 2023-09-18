<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CliRangos
 *
 * @ORM\Table(name="cli_rangos")
 * @ORM\Entity
 */
class CliRangos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrango", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrango;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="desde", type="integer", nullable=false)
     */
    private $desde;

    /**
     * @var integer
     *
     * @ORM\Column(name="hasta", type="integer", nullable=false)
     */
    private $hasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idaccion", type="smallint", nullable=true)
     */
    private $idaccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="frecuencia", type="integer", nullable=true)
     */
    private $frecuencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="smallint", nullable=false)
     */
    private $idestado;

    /**
     * @var integer
     *
     * @ORM\Column(name="moraporc", type="integer", nullable=true)
     */
    private $moraporc;

    /**
     * @var integer
     *
     * @ORM\Column(name="moraimp", type="integer", nullable=true)
     */
    private $moraimp;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroenvio", type="smallint", nullable=true)
     */
    private $nroenvio;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;



    /**
     * Get idrango
     *
     * @return integer 
     */
    public function getIdrango()
    {
        return $this->idrango;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return CliRangos
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set desde
     *
     * @param integer $desde
     * @return CliRangos
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return integer 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param integer $hasta
     * @return CliRangos
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return integer 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set idaccion
     *
     * @param integer $idaccion
     * @return CliRangos
     */
    public function setIdaccion($idaccion)
    {
        $this->idaccion = $idaccion;

        return $this;
    }

    /**
     * Get idaccion
     *
     * @return integer 
     */
    public function getIdaccion()
    {
        return $this->idaccion;
    }

    /**
     * Set frecuencia
     *
     * @param integer $frecuencia
     * @return CliRangos
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;

        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return integer 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * Set idestado
     *
     * @param integer $idestado
     * @return CliRangos
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
     * Set moraporc
     *
     * @param integer $moraporc
     * @return CliRangos
     */
    public function setMoraporc($moraporc)
    {
        $this->moraporc = $moraporc;

        return $this;
    }

    /**
     * Get moraporc
     *
     * @return integer 
     */
    public function getMoraporc()
    {
        return $this->moraporc;
    }

    /**
     * Set moraimp
     *
     * @param integer $moraimp
     * @return CliRangos
     */
    public function setMoraimp($moraimp)
    {
        $this->moraimp = $moraimp;

        return $this;
    }

    /**
     * Get moraimp
     *
     * @return integer 
     */
    public function getMoraimp()
    {
        return $this->moraimp;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return CliRangos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nroenvio
     *
     * @param integer $nroenvio
     * @return CliRangos
     */
    public function setNroenvio($nroenvio)
    {
        $this->nroenvio = $nroenvio;

        return $this;
    }

    /**
     * Get nroenvio
     *
     * @return integer 
     */
    public function getNroenvio()
    {
        return $this->nroenvio;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return CliRangos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
