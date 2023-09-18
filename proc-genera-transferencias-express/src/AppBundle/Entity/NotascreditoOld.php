<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotascreditoOld
 *
 * @ORM\Table(name="notascredito_old", indexes={@ORM\Index(name="IX_notascredito", columns={"idfactura"})})
 * @ORM\Entity
 */
class NotascreditoOld
{
    /**
     * @var string
     *
     * @ORM\Column(name="idnotacredito", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotacredito;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idfactura;

    /**
     * @var string
     *
     * @ORM\Column(name="notacredito", type="string", length=50, nullable=true)
     */
    private $notacredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=1000, nullable=true)
     */
    private $observacion;



    /**
     * Get idnotacredito
     *
     * @return string 
     */
    public function getIdnotacredito()
    {
        return $this->idnotacredito;
    }

    /**
     * Set idfactura
     *
     * @param string $idfactura
     * @return NotascreditoOld
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return string 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set notacredito
     *
     * @param string $notacredito
     * @return NotascreditoOld
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return NotascreditoOld
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
     * Set observacion
     *
     * @param string $observacion
     * @return NotascreditoOld
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
}
