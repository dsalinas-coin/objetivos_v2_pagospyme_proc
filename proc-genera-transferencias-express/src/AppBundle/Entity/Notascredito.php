<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notascredito
 *
 * @ORM\Table(name="notascredito", indexes={@ORM\Index(name="Idfactura", columns={"idfactura"}), @ORM\Index(name="idservicio", columns={"idservicio"})})
 * @ORM\Entity
 */
class Notascredito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotacredito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotacredito;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="tiponota", type="string", length=50, nullable=true)
     */
    private $tiponota;

    /**
     * @var string
     *
     * @ORM\Column(name="notacredito", type="string", length=50, nullable=true)
     */
    private $notacredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaemision", type="datetime", nullable=true)
     */
    private $fechaemision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavto", type="datetime", nullable=true)
     */
    private $fechavto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;



    /**
     * Get idnotacredito
     *
     * @return integer 
     */
    public function getIdnotacredito()
    {
        return $this->idnotacredito;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Notascredito
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
     * Set tiponota
     *
     * @param string $tiponota
     * @return Notascredito
     */
    public function setTiponota($tiponota)
    {
        $this->tiponota = $tiponota;

        return $this;
    }

    /**
     * Get tiponota
     *
     * @return string 
     */
    public function getTiponota()
    {
        return $this->tiponota;
    }

    /**
     * Set notacredito
     *
     * @param string $notacredito
     * @return Notascredito
     */
    public function setNotacredito($notacredito)
    {
        $this->notacredito = $notacredito;

        return $this;
    }

    /**
     * Get notacredito
     *
     * @return string 
     */
    public function getNotacredito()
    {
        return $this->notacredito;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Notascredito
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime 
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set fechavto
     *
     * @param \DateTime $fechavto
     * @return Notascredito
     */
    public function setFechavto($fechavto)
    {
        $this->fechavto = $fechavto;

        return $this;
    }

    /**
     * Get fechavto
     *
     * @return \DateTime 
     */
    public function getFechavto()
    {
        return $this->fechavto;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Notascredito
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
     * Set observacion
     *
     * @param string $observacion
     * @return Notascredito
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Notascredito
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
     * Set idfactura
     *
     * @param integer $idfactura
     * @return Notascredito
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return integer 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Notascredito
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
}
