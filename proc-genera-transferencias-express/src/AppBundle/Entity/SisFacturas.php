<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisFacturas
 *
 * @ORM\Table(name="sis_facturas", indexes={@ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K7", columns={"mesdatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K8_K7_K21", columns={"idfactura", "idcliente", "aniodatos", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K8_K7_K21_K1", columns={"idcliente", "aniodatos", "mesdatos", "idempresa", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K21_K7_K8", columns={"idfactura", "idcliente", "idempresa", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K21_K1_K2_K7_K8", columns={"idempresa", "idfactura", "idcliente", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K7_K8_K21_K2_K1", columns={"mesdatos", "aniodatos", "idempresa", "idcliente", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K1", columns={"idcliente", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21_K1", columns={"idcliente", "idempresa", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2", columns={"idcliente"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K8_K7_K21", columns={"idcliente", "aniodatos", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21", columns={"idcliente", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K21_K2_K1", columns={"idempresa", "idcliente", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K7_K8_K21", columns={"idfactura", "idcliente", "mesdatos", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K21", columns={"idfactura", "idcliente", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K8_K1_K2_K7_K21", columns={"aniodatos", "idfactura", "idcliente", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K1_K7_K8_K21", columns={"idcliente", "idfactura", "mesdatos", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K21", columns={"idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21_K1_K7_K8", columns={"idcliente", "idempresa", "idfactura", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K7_K1_K2_K8_K21", columns={"mesdatos", "idfactura", "idcliente", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2", columns={"idfactura", "idcliente"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K8", columns={"aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K7_9987", columns={"mesdatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K8_K7_K21_4364", columns={"idfactura", "idcliente", "aniodatos", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K8_K7_K21_K1_8066", columns={"idcliente", "aniodatos", "mesdatos", "idempresa", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_1", columns={"idfactura", "idcliente"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K21_K7_K8_5201", columns={"idfactura", "idcliente", "idempresa", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K21_K1_K2_K7_K8_6497", columns={"idempresa", "idfactura", "idcliente", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21_1", columns={"idfactura", "idcliente", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K1_1771", columns={"idcliente", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21_K1_8258", columns={"idcliente", "idempresa", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_1410", columns={"idcliente"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1", columns={"idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K7_K8_K21_6960", columns={"idfactura", "idcliente", "mesdatos", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_K21_9850", columns={"idfactura", "idcliente", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K8_K1_K2_K7_K21_9085", columns={"aniodatos", "idfactura", "idcliente", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K1_K7_K8_K21_6355", columns={"idcliente", "idfactura", "mesdatos", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K21_8526", columns={"idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K21_K1_K7_K8_8341", columns={"idcliente", "idempresa", "idfactura", "mesdatos", "aniodatos"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K7_K1_K2_K8_K21_114", columns={"mesdatos", "idfactura", "idcliente", "aniodatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K7_K8_K21_K1", columns={"idcliente", "mesdatos", "aniodatos", "idempresa", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K1_K2_9910", columns={"idfactura", "idcliente"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K2_K8_K7_K21_1", columns={"idfactura", "idcliente", "aniodatos", "mesdatos", "idempresa"}), @ORM\Index(name="_dta_index_sis_facturas_5_1005298691__K8_4288", columns={"aniodatos"}), @ORM\Index(name="NonClusteredIndex-20161003-111106", columns={"mesdatos", "aniodatos", "activo", "anular"}), @ORM\Index(name="NonClusteredIndex-20161003-111856", columns={"idcliente", "tipofactura", "cae", "idtipo_factura", "idempresa"})})
 * @ORM\Entity
 */
class SisFacturas
{
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
     * @var integer
     *
     * @ORM\Column(name="motivo", type="smallint", nullable=true)
     */
    private $motivo;

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
     * @var integer
     *
     * @ORM\Column(name="idarchivo", type="integer", nullable=true)
     */
    private $idarchivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anular", type="boolean", nullable=true)
     */
    private $anular;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta_xml", type="text", length=-1, nullable=true)
     */
    private $respuestaXml;

    /**
     * @var integer
     *
     * @ORM\Column(name="procautomatico", type="integer", nullable=true)
     */
    private $procautomatico;

    /**
     * @var integer
     *
     * @ORM\Column(name="debitar", type="integer", nullable=true)
     */
    private $debitar;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura_emisor", type="integer", nullable=true)
     */
    private $idfacturaEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="relacion", type="string", length=50, nullable=true)
     */
    private $relacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="migrado", type="integer", nullable=true)
     */
    private $migrado;

    /**
     * @var \SisFacturas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SisFacturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfactura", referencedColumnName="idfactura")
     * })
     */
    private $idfactura;



    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @param integer $motivo
     * @return SisFacturas
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return integer 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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
     * @return SisFacturas
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

    /**
     * Set idarchivo
     *
     * @param integer $idarchivo
     * @return SisFacturas
     */
    public function setIdarchivo($idarchivo)
    {
        $this->idarchivo = $idarchivo;

        return $this;
    }

    /**
     * Get idarchivo
     *
     * @return integer 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }

    /**
     * Set anular
     *
     * @param boolean $anular
     * @return SisFacturas
     */
    public function setAnular($anular)
    {
        $this->anular = $anular;

        return $this;
    }

    /**
     * Get anular
     *
     * @return boolean 
     */
    public function getAnular()
    {
        return $this->anular;
    }

    /**
     * Set respuestaXml
     *
     * @param string $respuestaXml
     * @return SisFacturas
     */
    public function setRespuestaXml($respuestaXml)
    {
        $this->respuestaXml = $respuestaXml;

        return $this;
    }

    /**
     * Get respuestaXml
     *
     * @return string 
     */
    public function getRespuestaXml()
    {
        return $this->respuestaXml;
    }

    /**
     * Set procautomatico
     *
     * @param integer $procautomatico
     * @return SisFacturas
     */
    public function setProcautomatico($procautomatico)
    {
        $this->procautomatico = $procautomatico;

        return $this;
    }

    /**
     * Get procautomatico
     *
     * @return integer 
     */
    public function getProcautomatico()
    {
        return $this->procautomatico;
    }

    /**
     * Set debitar
     *
     * @param integer $debitar
     * @return SisFacturas
     */
    public function setDebitar($debitar)
    {
        $this->debitar = $debitar;

        return $this;
    }

    /**
     * Get debitar
     *
     * @return integer 
     */
    public function getDebitar()
    {
        return $this->debitar;
    }

    /**
     * Set idfacturaEmisor
     *
     * @param integer $idfacturaEmisor
     * @return SisFacturas
     */
    public function setIdfacturaEmisor($idfacturaEmisor)
    {
        $this->idfacturaEmisor = $idfacturaEmisor;

        return $this;
    }

    /**
     * Get idfacturaEmisor
     *
     * @return integer 
     */
    public function getIdfacturaEmisor()
    {
        return $this->idfacturaEmisor;
    }

    /**
     * Set relacion
     *
     * @param string $relacion
     * @return SisFacturas
     */
    public function setRelacion($relacion)
    {
        $this->relacion = $relacion;

        return $this;
    }

    /**
     * Get relacion
     *
     * @return string 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Set migrado
     *
     * @param integer $migrado
     * @return SisFacturas
     */
    public function setMigrado($migrado)
    {
        $this->migrado = $migrado;

        return $this;
    }

    /**
     * Get migrado
     *
     * @return integer 
     */
    public function getMigrado()
    {
        return $this->migrado;
    }

    /**
     * Set idfactura
     *
     * @param \AppBundle\Entity\SisFacturas $idfactura
     * @return SisFacturas
     */
    public function setIdfactura(\AppBundle\Entity\SisFacturas $idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return \AppBundle\Entity\SisFacturas 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }
}
