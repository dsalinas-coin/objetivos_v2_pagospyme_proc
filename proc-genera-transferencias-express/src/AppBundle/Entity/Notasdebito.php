<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notasdebito
 *
 * @ORM\Table(name="notasdebito", indexes={@ORM\Index(name="idservicio", columns={"idservicio"})})
 * @ORM\Entity
 */
class Notasdebito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotadebito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotadebito;

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
     * @ORM\Column(name="notadebito", type="string", length=50, nullable=true)
     */
    private $notadebito;

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
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idnotadebito
     *
     * @return integer 
     */
    public function getIdnotadebito()
    {
        return $this->idnotadebito;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Notasdebito
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
     * @return Notasdebito
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
     * Set notadebito
     *
     * @param string $notadebito
     * @return Notasdebito
     */
    public function setNotadebito($notadebito)
    {
        $this->notadebito = $notadebito;

        return $this;
    }

    /**
     * Get notadebito
     *
     * @return string 
     */
    public function getNotadebito()
    {
        return $this->notadebito;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Notasdebito
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
     * @return Notasdebito
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
     * @return Notasdebito
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
     * Set importe
     *
     * @param integer $importe
     * @return Notasdebito
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
     * @return Notasdebito
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return Notasdebito
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
     * Set estado
     *
     * @param integer $estado
     * @return Notasdebito
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
