<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificacionesPagosHistorialPagofacil
 *
 * @ORM\Table(name="notificaciones_pagos_historial_pagofacil", indexes={@ORM\Index(name="IDX_D04C5DEE343566E5", columns={"idnotificacion"})})
 * @ORM\Entity
 */
class NotificacionesPagosHistorialPagofacil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotificacion_pf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotificacionPf;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_barras", type="string", length=42, nullable=false)
     */
    private $codigoBarras;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documento", type="string", length=3, nullable=true)
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=100, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_usuario", type="string", length=100, nullable=false)
     */
    private $numeroUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=3, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal", type="string", length=6, nullable=true)
     */
    private $terminal;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_transaccion", type="string", length=5, nullable=true)
     */
    private $numeroTransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_proceso_pf", type="datetime", nullable=true)
     */
    private $fechaProcesoPf;

    /**
     * @var \NotificacionesPagosHistorial
     *
     * @ORM\ManyToOne(targetEntity="NotificacionesPagosHistorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idnotificacion", referencedColumnName="idnotificacion")
     * })
     */
    private $idnotificacion;



    /**
     * Get idnotificacionPf
     *
     * @return integer 
     */
    public function getIdnotificacionPf()
    {
        return $this->idnotificacionPf;
    }

    /**
     * Set codigoBarras
     *
     * @param string $codigoBarras
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setCodigoBarras($codigoBarras)
    {
        $this->codigoBarras = $codigoBarras;

        return $this;
    }

    /**
     * Get codigoBarras
     *
     * @return string 
     */
    public function getCodigoBarras()
    {
        return $this->codigoBarras;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string 
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set numeroUsuario
     *
     * @param string $numeroUsuario
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setNumeroUsuario($numeroUsuario)
    {
        $this->numeroUsuario = $numeroUsuario;

        return $this;
    }

    /**
     * Get numeroUsuario
     *
     * @return string 
     */
    public function getNumeroUsuario()
    {
        return $this->numeroUsuario;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set terminal
     *
     * @param string $terminal
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Get terminal
     *
     * @return string 
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set numeroTransaccion
     *
     * @param string $numeroTransaccion
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setNumeroTransaccion($numeroTransaccion)
    {
        $this->numeroTransaccion = $numeroTransaccion;

        return $this;
    }

    /**
     * Get numeroTransaccion
     *
     * @return string 
     */
    public function getNumeroTransaccion()
    {
        return $this->numeroTransaccion;
    }

    /**
     * Set fechaProcesoPf
     *
     * @param \DateTime $fechaProcesoPf
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setFechaProcesoPf($fechaProcesoPf)
    {
        $this->fechaProcesoPf = $fechaProcesoPf;

        return $this;
    }

    /**
     * Get fechaProcesoPf
     *
     * @return \DateTime 
     */
    public function getFechaProcesoPf()
    {
        return $this->fechaProcesoPf;
    }

    /**
     * Set idnotificacion
     *
     * @param \AppBundle\Entity\NotificacionesPagosHistorial $idnotificacion
     * @return NotificacionesPagosHistorialPagofacil
     */
    public function setIdnotificacion(\AppBundle\Entity\NotificacionesPagosHistorial $idnotificacion = null)
    {
        $this->idnotificacion = $idnotificacion;

        return $this;
    }

    /**
     * Get idnotificacion
     *
     * @return \AppBundle\Entity\NotificacionesPagosHistorial 
     */
    public function getIdnotificacion()
    {
        return $this->idnotificacion;
    }
}
