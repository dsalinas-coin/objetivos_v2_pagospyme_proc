<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisFacturasTest
 *
 * @ORM\Table(name="sis_facturas_test")
 * @ORM\Entity
 */
class SisFacturasTest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipofactura", type="string", length=5, nullable=true)
     */
    private $tipofactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntodeventa", type="integer", nullable=true)
     */
    private $puntodeventa;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrofactura", type="integer", nullable=true)
     */
    private $nrofactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="datetime", nullable=true)
     */
    private $fechaalta;

    /**
     * @var integer
     *
     * @ORM\Column(name="mesdatos", type="smallint", nullable=true)
     */
    private $mesdatos;

    /**
     * @var integer
     *
     * @ORM\Column(name="aniodatos", type="smallint", nullable=true)
     */
    private $aniodatos;

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
     * @var integer
     *
     * @ORM\Column(name="importe_bruto", type="integer", nullable=true)
     */
    private $importeBruto;

    /**
     * @var float
     *
     * @ORM\Column(name="iva", type="float", precision=24, scale=0, nullable=true)
     */
    private $iva;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cae", type="string", length=15, nullable=true)
     */
    private $cae;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo_factura", type="smallint", nullable=true)
     */
    private $idtipoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=10, nullable=true)
     */
    private $motivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsolicitud", type="integer", nullable=true)
     */
    private $idsolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=10, nullable=true)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechamail", type="datetime", nullable=true)
     */
    private $fechamail;

    /**
     * @var integer
     *
     * @ORM\Column(name="idempresa", type="integer", nullable=true)
     */
    private $idempresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_total", type="integer", nullable=true)
     */
    private $importeTotal;



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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return SisFacturasTest
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
     * Set tipofactura
     *
     * @param string $tipofactura
     * @return SisFacturasTest
     */
    public function setTipofactura($tipofactura)
    {
        $this->tipofactura = $tipofactura;

        return $this;
    }

    /**
     * Get tipofactura
     *
     * @return string 
     */
    public function getTipofactura()
    {
        return $this->tipofactura;
    }

    /**
     * Set puntodeventa
     *
     * @param integer $puntodeventa
     * @return SisFacturasTest
     */
    public function setPuntodeventa($puntodeventa)
    {
        $this->puntodeventa = $puntodeventa;

        return $this;
    }

    /**
     * Get puntodeventa
     *
     * @return integer 
     */
    public function getPuntodeventa()
    {
        return $this->puntodeventa;
    }

    /**
     * Set nrofactura
     *
     * @param integer $nrofactura
     * @return SisFacturasTest
     */
    public function setNrofactura($nrofactura)
    {
        $this->nrofactura = $nrofactura;

        return $this;
    }

    /**
     * Get nrofactura
     *
     * @return integer 
     */
    public function getNrofactura()
    {
        return $this->nrofactura;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return SisFacturasTest
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime 
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set mesdatos
     *
     * @param integer $mesdatos
     * @return SisFacturasTest
     */
    public function setMesdatos($mesdatos)
    {
        $this->mesdatos = $mesdatos;

        return $this;
    }

    /**
     * Get mesdatos
     *
     * @return integer 
     */
    public function getMesdatos()
    {
        return $this->mesdatos;
    }

    /**
     * Set aniodatos
     *
     * @param integer $aniodatos
     * @return SisFacturasTest
     */
    public function setAniodatos($aniodatos)
    {
        $this->aniodatos = $aniodatos;

        return $this;
    }

    /**
     * Get aniodatos
     *
     * @return integer 
     */
    public function getAniodatos()
    {
        return $this->aniodatos;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return SisFacturasTest
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
     * @return SisFacturasTest
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
     * Set importeBruto
     *
     * @param integer $importeBruto
     * @return SisFacturasTest
     */
    public function setImporteBruto($importeBruto)
    {
        $this->importeBruto = $importeBruto;

        return $this;
    }

    /**
     * Get importeBruto
     *
     * @return integer 
     */
    public function getImporteBruto()
    {
        return $this->importeBruto;
    }

    /**
     * Set iva
     *
     * @param float $iva
     * @return SisFacturasTest
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return float 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return SisFacturasTest
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
     * Set cae
     *
     * @param string $cae
     * @return SisFacturasTest
     */
    public function setCae($cae)
    {
        $this->cae = $cae;

        return $this;
    }

    /**
     * Get cae
     *
     * @return string 
     */
    public function getCae()
    {
        return $this->cae;
    }

    /**
     * Set idtipoFactura
     *
     * @param integer $idtipoFactura
     * @return SisFacturasTest
     */
    public function setIdtipoFactura($idtipoFactura)
    {
        $this->idtipoFactura = $idtipoFactura;

        return $this;
    }

    /**
     * Get idtipoFactura
     *
     * @return integer 
     */
    public function getIdtipoFactura()
    {
        return $this->idtipoFactura;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return SisFacturasTest
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
     * Set idsolicitud
     *
     * @param integer $idsolicitud
     * @return SisFacturasTest
     */
    public function setIdsolicitud($idsolicitud)
    {
        $this->idsolicitud = $idsolicitud;

        return $this;
    }

    /**
     * Get idsolicitud
     *
     * @return integer 
     */
    public function getIdsolicitud()
    {
        return $this->idsolicitud;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return SisFacturasTest
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return SisFacturasTest
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
     * Set fechamail
     *
     * @param \DateTime $fechamail
     * @return SisFacturasTest
     */
    public function setFechamail($fechamail)
    {
        $this->fechamail = $fechamail;

        return $this;
    }

    /**
     * Get fechamail
     *
     * @return \DateTime 
     */
    public function getFechamail()
    {
        return $this->fechamail;
    }

    /**
     * Set idempresa
     *
     * @param integer $idempresa
     * @return SisFacturasTest
     */
    public function setIdempresa($idempresa)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return integer 
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set importeTotal
     *
     * @param integer $importeTotal
     * @return SisFacturasTest
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;

        return $this;
    }

    /**
     * Get importeTotal
     *
     * @return integer 
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }
}
