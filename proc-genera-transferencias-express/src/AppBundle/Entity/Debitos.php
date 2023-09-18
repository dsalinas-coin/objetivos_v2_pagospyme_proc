<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debitos
 *
 * @ORM\Table(name="debitos", indexes={@ORM\Index(name="IDX_67E122A72B18C94B", columns={"idcliente"}), @ORM\Index(name="IDX_67E122A742E04C4F", columns={"idestado"})})
 * @ORM\Entity
 */
class Debitos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddebito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=false)
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_envio", type="datetime", nullable=false)
     */
    private $fechaEnvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_proceso_rgp", type="datetime", nullable=true)
     */
    private $fechaProcesoRgp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_debito", type="datetime", nullable=false)
     */
    private $fechaDebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=10, nullable=true)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="cbu", type="string", length=50, nullable=true)
     */
    private $cbu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_resultado", type="datetime", nullable=true)
     */
    private $fechaIngresoResultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="informado", type="smallint", nullable=false)
     */
    private $informado;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcliente", referencedColumnName="idcliente")
     * })
     */
    private $idcliente;

    /**
     * @var \DebitosEstados
     *
     * @ORM\ManyToOne(targetEntity="DebitosEstados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestado", referencedColumnName="idestado")
     * })
     */
    private $idestado;



    /**
     * Get iddebito
     *
     * @return integer 
     */
    public function getIddebito()
    {
        return $this->iddebito;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return Debitos
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
     * Set fechaEnvio
     *
     * @param \DateTime $fechaEnvio
     * @return Debitos
     */
    public function setFechaEnvio($fechaEnvio)
    {
        $this->fechaEnvio = $fechaEnvio;

        return $this;
    }

    /**
     * Get fechaEnvio
     *
     * @return \DateTime 
     */
    public function getFechaEnvio()
    {
        return $this->fechaEnvio;
    }

    /**
     * Set fechaProcesoRgp
     *
     * @param \DateTime $fechaProcesoRgp
     * @return Debitos
     */
    public function setFechaProcesoRgp($fechaProcesoRgp)
    {
        $this->fechaProcesoRgp = $fechaProcesoRgp;

        return $this;
    }

    /**
     * Get fechaProcesoRgp
     *
     * @return \DateTime 
     */
    public function getFechaProcesoRgp()
    {
        return $this->fechaProcesoRgp;
    }

    /**
     * Set fechaDebito
     *
     * @param \DateTime $fechaDebito
     * @return Debitos
     */
    public function setFechaDebito($fechaDebito)
    {
        $this->fechaDebito = $fechaDebito;

        return $this;
    }

    /**
     * Get fechaDebito
     *
     * @return \DateTime 
     */
    public function getFechaDebito()
    {
        return $this->fechaDebito;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Debitos
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

    /**
     * Set banco
     *
     * @param string $banco
     * @return Debitos
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set cbu
     *
     * @param string $cbu
     * @return Debitos
     */
    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }

    /**
     * Get cbu
     *
     * @return string 
     */
    public function getCbu()
    {
        return $this->cbu;
    }

    /**
     * Set fechaIngresoResultado
     *
     * @param \DateTime $fechaIngresoResultado
     * @return Debitos
     */
    public function setFechaIngresoResultado($fechaIngresoResultado)
    {
        $this->fechaIngresoResultado = $fechaIngresoResultado;

        return $this;
    }

    /**
     * Get fechaIngresoResultado
     *
     * @return \DateTime 
     */
    public function getFechaIngresoResultado()
    {
        return $this->fechaIngresoResultado;
    }

    /**
     * Set informado
     *
     * @param integer $informado
     * @return Debitos
     */
    public function setInformado($informado)
    {
        $this->informado = $informado;

        return $this;
    }

    /**
     * Get informado
     *
     * @return integer 
     */
    public function getInformado()
    {
        return $this->informado;
    }

    /**
     * Set idcliente
     *
     * @param \AppBundle\Entity\Clientes $idcliente
     * @return Debitos
     */
    public function setIdcliente(\AppBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AppBundle\Entity\Clientes 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idestado
     *
     * @param \AppBundle\Entity\DebitosEstados $idestado
     * @return Debitos
     */
    public function setIdestado(\AppBundle\Entity\DebitosEstados $idestado = null)
    {
        $this->idestado = $idestado;

        return $this;
    }

    /**
     * Get idestado
     *
     * @return \AppBundle\Entity\DebitosEstados 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }
}
