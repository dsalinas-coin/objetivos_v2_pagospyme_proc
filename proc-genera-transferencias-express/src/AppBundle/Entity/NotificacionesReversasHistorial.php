<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificacionesReversasHistorial
 *
 * @ORM\Table(name="notificaciones_reversas_historial")
 * @ORM\Entity
 */
class NotificacionesReversasHistorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotificacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio_adicional", type="integer", nullable=true)
     */
    private $idservicioAdicional;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reversa", type="datetime", nullable=true)
     */
    private $fechaReversa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_enviado", type="datetime", nullable=true)
     */
    private $fechaEnviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_abonado", type="integer", nullable=true)
     */
    private $importeAbonado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmedio", type="integer", nullable=true)
     */
    private $idmedio;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_operacion", type="string", length=100, nullable=true)
     */
    private $codigoOperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pago", type="datetime", nullable=true)
     */
    private $fechaPago;



    /**
     * Get idnotificacion
     *
     * @return integer 
     */
    public function getIdnotificacion()
    {
        return $this->idnotificacion;
    }

    /**
     * Set idservicioAdicional
     *
     * @param integer $idservicioAdicional
     * @return NotificacionesReversasHistorial
     */
    public function setIdservicioAdicional($idservicioAdicional)
    {
        $this->idservicioAdicional = $idservicioAdicional;

        return $this;
    }

    /**
     * Get idservicioAdicional
     *
     * @return integer 
     */
    public function getIdservicioAdicional()
    {
        return $this->idservicioAdicional;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return NotificacionesReversasHistorial
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
     * Set fechaReversa
     *
     * @param \DateTime $fechaReversa
     * @return NotificacionesReversasHistorial
     */
    public function setFechaReversa($fechaReversa)
    {
        $this->fechaReversa = $fechaReversa;

        return $this;
    }

    /**
     * Get fechaReversa
     *
     * @return \DateTime 
     */
    public function getFechaReversa()
    {
        return $this->fechaReversa;
    }

    /**
     * Set fechaEnviado
     *
     * @param \DateTime $fechaEnviado
     * @return NotificacionesReversasHistorial
     */
    public function setFechaEnviado($fechaEnviado)
    {
        $this->fechaEnviado = $fechaEnviado;

        return $this;
    }

    /**
     * Get fechaEnviado
     *
     * @return \DateTime 
     */
    public function getFechaEnviado()
    {
        return $this->fechaEnviado;
    }

    /**
     * Set importeAbonado
     *
     * @param integer $importeAbonado
     * @return NotificacionesReversasHistorial
     */
    public function setImporteAbonado($importeAbonado)
    {
        $this->importeAbonado = $importeAbonado;

        return $this;
    }

    /**
     * Get importeAbonado
     *
     * @return integer 
     */
    public function getImporteAbonado()
    {
        return $this->importeAbonado;
    }

    /**
     * Set idmedio
     *
     * @param integer $idmedio
     * @return NotificacionesReversasHistorial
     */
    public function setIdmedio($idmedio)
    {
        $this->idmedio = $idmedio;

        return $this;
    }

    /**
     * Get idmedio
     *
     * @return integer 
     */
    public function getIdmedio()
    {
        return $this->idmedio;
    }

    /**
     * Set codigoOperacion
     *
     * @param string $codigoOperacion
     * @return NotificacionesReversasHistorial
     */
    public function setCodigoOperacion($codigoOperacion)
    {
        $this->codigoOperacion = $codigoOperacion;

        return $this;
    }

    /**
     * Get codigoOperacion
     *
     * @return string 
     */
    public function getCodigoOperacion()
    {
        return $this->codigoOperacion;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return NotificacionesReversasHistorial
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }
}
