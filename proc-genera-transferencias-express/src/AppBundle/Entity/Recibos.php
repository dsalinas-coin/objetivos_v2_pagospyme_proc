<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibos
 *
 * @ORM\Table(name="recibos")
 * @ORM\Entity
 */
class Recibos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrecibo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecibo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocomprobante", type="string", length=50, nullable=true)
     */
    private $nrocomprobante;

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
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;



    /**
     * Get idrecibo
     *
     * @return integer 
     */
    public function getIdrecibo()
    {
        return $this->idrecibo;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Recibos
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
     * Set nrocomprobante
     *
     * @param string $nrocomprobante
     * @return Recibos
     */
    public function setNrocomprobante($nrocomprobante)
    {
        $this->nrocomprobante = $nrocomprobante;

        return $this;
    }

    /**
     * Get nrocomprobante
     *
     * @return string 
     */
    public function getNrocomprobante()
    {
        return $this->nrocomprobante;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * @return Recibos
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
     * Set estado
     *
     * @param integer $estado
     * @return Recibos
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
