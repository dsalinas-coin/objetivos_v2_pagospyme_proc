<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperacionesSps
 *
 * @ORM\Table(name="operaciones_sps")
 * @ORM\Entity
 */
class OperacionesSps
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
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaoperacion", type="datetime", nullable=true)
     */
    private $fechaoperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmedio", type="smallint", nullable=true)
     */
    private $idmedio;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrooperacion", type="integer", nullable=true)
     */
    private $nrooperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codoperacion", type="string", length=50, nullable=true)
     */
    private $codoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codautorizacion", type="string", length=50, nullable=true)
     */
    private $codautorizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuotas", type="smallint", nullable=true)
     */
    private $cuotas;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=100, nullable=true)
     */
    private $titular;

    /**
     * @var integer
     *
     * @ORM\Column(name="monto", type="integer", nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipodocumento", type="smallint", nullable=true)
     */
    private $idtipodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="nrodocumento", type="string", length=20, nullable=true)
     */
    private $nrodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="tarjeta", type="string", length=50, nullable=true)
     */
    private $tarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtarjeta", type="smallint", nullable=true)
     */
    private $idtarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcomprador", type="string", length=80, nullable=true)
     */
    private $emailcomprador;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultado", type="smallint", nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=100, nullable=true)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="parametros", type="string", length=2000, nullable=true)
     */
    private $parametros;



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
     * Set idservicio
     *
     * @param integer $idservicio
     * @return OperacionesSps
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
     * Set idfactura
     *
     * @param integer $idfactura
     * @return OperacionesSps
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return OperacionesSps
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
     * Set fechaoperacion
     *
     * @param \DateTime $fechaoperacion
     * @return OperacionesSps
     */
    public function setFechaoperacion($fechaoperacion)
    {
        $this->fechaoperacion = $fechaoperacion;

        return $this;
    }

    /**
     * Get fechaoperacion
     *
     * @return \DateTime 
     */
    public function getFechaoperacion()
    {
        return $this->fechaoperacion;
    }

    /**
     * Set idmedio
     *
     * @param integer $idmedio
     * @return OperacionesSps
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
     * Set nrooperacion
     *
     * @param integer $nrooperacion
     * @return OperacionesSps
     */
    public function setNrooperacion($nrooperacion)
    {
        $this->nrooperacion = $nrooperacion;

        return $this;
    }

    /**
     * Get nrooperacion
     *
     * @return integer 
     */
    public function getNrooperacion()
    {
        return $this->nrooperacion;
    }

    /**
     * Set codoperacion
     *
     * @param string $codoperacion
     * @return OperacionesSps
     */
    public function setCodoperacion($codoperacion)
    {
        $this->codoperacion = $codoperacion;

        return $this;
    }

    /**
     * Get codoperacion
     *
     * @return string 
     */
    public function getCodoperacion()
    {
        return $this->codoperacion;
    }

    /**
     * Set codautorizacion
     *
     * @param string $codautorizacion
     * @return OperacionesSps
     */
    public function setCodautorizacion($codautorizacion)
    {
        $this->codautorizacion = $codautorizacion;

        return $this;
    }

    /**
     * Get codautorizacion
     *
     * @return string 
     */
    public function getCodautorizacion()
    {
        return $this->codautorizacion;
    }

    /**
     * Set cuotas
     *
     * @param integer $cuotas
     * @return OperacionesSps
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
     * Set titular
     *
     * @param string $titular
     * @return OperacionesSps
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string 
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set monto
     *
     * @param integer $monto
     * @return OperacionesSps
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return integer 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set idtipodocumento
     *
     * @param integer $idtipodocumento
     * @return OperacionesSps
     */
    public function setIdtipodocumento($idtipodocumento)
    {
        $this->idtipodocumento = $idtipodocumento;

        return $this;
    }

    /**
     * Get idtipodocumento
     *
     * @return integer 
     */
    public function getIdtipodocumento()
    {
        return $this->idtipodocumento;
    }

    /**
     * Set nrodocumento
     *
     * @param string $nrodocumento
     * @return OperacionesSps
     */
    public function setNrodocumento($nrodocumento)
    {
        $this->nrodocumento = $nrodocumento;

        return $this;
    }

    /**
     * Get nrodocumento
     *
     * @return string 
     */
    public function getNrodocumento()
    {
        return $this->nrodocumento;
    }

    /**
     * Set tarjeta
     *
     * @param string $tarjeta
     * @return OperacionesSps
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }

    /**
     * Get tarjeta
     *
     * @return string 
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * Set idtarjeta
     *
     * @param integer $idtarjeta
     * @return OperacionesSps
     */
    public function setIdtarjeta($idtarjeta)
    {
        $this->idtarjeta = $idtarjeta;

        return $this;
    }

    /**
     * Get idtarjeta
     *
     * @return integer 
     */
    public function getIdtarjeta()
    {
        return $this->idtarjeta;
    }

    /**
     * Set emailcomprador
     *
     * @param string $emailcomprador
     * @return OperacionesSps
     */
    public function setEmailcomprador($emailcomprador)
    {
        $this->emailcomprador = $emailcomprador;

        return $this;
    }

    /**
     * Get emailcomprador
     *
     * @return string 
     */
    public function getEmailcomprador()
    {
        return $this->emailcomprador;
    }

    /**
     * Set resultado
     *
     * @param integer $resultado
     * @return OperacionesSps
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return integer 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return OperacionesSps
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set parametros
     *
     * @param string $parametros
     * @return OperacionesSps
     */
    public function setParametros($parametros)
    {
        $this->parametros = $parametros;

        return $this;
    }

    /**
     * Get parametros
     *
     * @return string 
     */
    public function getParametros()
    {
        return $this->parametros;
    }
}
