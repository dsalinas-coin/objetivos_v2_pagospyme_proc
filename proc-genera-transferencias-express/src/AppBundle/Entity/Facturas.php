<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas", indexes={@ORM\Index(name="estado", columns={"estado"}), @ORM\Index(name="idusuario", columns={"idusuario"}), @ORM\Index(name="idservicio", columns={"idservicio"}), @ORM\Index(name="fechavto", columns={"fechavto"}), @ORM\Index(name="tipofactura", columns={"tipofactura"}), @ORM\Index(name="idx_facturas_nrofactura", columns={"nrofactura"}), @ORM\Index(name="_dta_index_facturas_5_2007014231__K3_K1_10_12", columns={"importe_bruto", "iva", "idservicio", "idfactura"}), @ORM\Index(name="_dta_index_facturas_5_2007014231__K3_5", columns={"fechavto", "idservicio"}), @ORM\Index(name="fechaingreso", columns={"fechaingreso"}), @ORM\Index(name="idx_facturas_migrated", columns={"idfactura", "migrated"})})
 * @ORM\Entity
 */
class Facturas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

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
     * @ORM\Column(name="fechavto2", type="datetime", nullable=true)
     */
    private $fechavto2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipofactura", type="string", length=5, nullable=true)
     */
    private $tipofactura;

    /**
     * @var string
     *
     * @ORM\Column(name="nrofactura", type="string", length=50, nullable=true)
     */
    private $nrofactura;

    /**
     * @var float
     *
     * @ORM\Column(name="descuento", type="float", precision=24, scale=0, nullable=true)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_bruto", type="integer", nullable=true)
     */
    private $importeBruto;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_bruto2", type="integer", nullable=true)
     */
    private $importeBruto2;

    /**
     * @var float
     *
     * @ORM\Column(name="iva", type="float", precision=24, scale=0, nullable=true)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=400, nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idaccion", type="integer", nullable=true)
     */
    private $idaccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestado", type="datetime", nullable=true)
     */
    private $fechaestado;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=2, nullable=true)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="cae", type="bigint", nullable=true)
     */
    private $cae;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrearchivo", type="string", length=100, nullable=true)
     */
    private $nombrearchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=300, nullable=true)
     */
    private $comentarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipodocumento", type="smallint", nullable=true)
     */
    private $idtipodocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_bruto_vencido", type="integer", nullable=true)
     */
    private $importeBrutoVencido;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmoneda", type="smallint", nullable=true)
     */
    private $idmoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=1000, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="migrated", type="integer", nullable=true)
     */
    private $migrated;



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
     * Set idusuario
     *
     * @param integer $idusuario
     * @return Facturas
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Facturas
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
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Facturas
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
     * @return Facturas
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
     * Set fechavto2
     *
     * @param \DateTime $fechavto2
     * @return Facturas
     */
    public function setFechavto2($fechavto2)
    {
        $this->fechavto2 = $fechavto2;

        return $this;
    }

    /**
     * Get fechavto2
     *
     * @return \DateTime 
     */
    public function getFechavto2()
    {
        return $this->fechavto2;
    }

    /**
     * Set tipofactura
     *
     * @param string $tipofactura
     * @return Facturas
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
     * Set nrofactura
     *
     * @param string $nrofactura
     * @return Facturas
     */
    public function setNrofactura($nrofactura)
    {
        $this->nrofactura = $nrofactura;

        return $this;
    }

    /**
     * Get nrofactura
     *
     * @return string 
     */
    public function getNrofactura()
    {
        return $this->nrofactura;
    }

    /**
     * Set descuento
     *
     * @param float $descuento
     * @return Facturas
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return float 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set importeBruto
     *
     * @param integer $importeBruto
     * @return Facturas
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
     * Set importeBruto2
     *
     * @param integer $importeBruto2
     * @return Facturas
     */
    public function setImporteBruto2($importeBruto2)
    {
        $this->importeBruto2 = $importeBruto2;

        return $this;
    }

    /**
     * Get importeBruto2
     *
     * @return integer 
     */
    public function getImporteBruto2()
    {
        return $this->importeBruto2;
    }

    /**
     * Set iva
     *
     * @param float $iva
     * @return Facturas
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
     * Set observacion
     *
     * @param string $observacion
     * @return Facturas
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Facturas
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
     * Set idaccion
     *
     * @param integer $idaccion
     * @return Facturas
     */
    public function setIdaccion($idaccion)
    {
        $this->idaccion = $idaccion;

        return $this;
    }

    /**
     * Get idaccion
     *
     * @return integer 
     */
    public function getIdaccion()
    {
        return $this->idaccion;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Facturas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Facturas
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
     * Set fechaestado
     *
     * @param \DateTime $fechaestado
     * @return Facturas
     */
    public function setFechaestado($fechaestado)
    {
        $this->fechaestado = $fechaestado;

        return $this;
    }

    /**
     * Get fechaestado
     *
     * @return \DateTime 
     */
    public function getFechaestado()
    {
        return $this->fechaestado;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Facturas
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
     * Set cae
     *
     * @param integer $cae
     * @return Facturas
     */
    public function setCae($cae)
    {
        $this->cae = $cae;

        return $this;
    }

    /**
     * Get cae
     *
     * @return integer 
     */
    public function getCae()
    {
        return $this->cae;
    }

    /**
     * Set nombrearchivo
     *
     * @param string $nombrearchivo
     * @return Facturas
     */
    public function setNombrearchivo($nombrearchivo)
    {
        $this->nombrearchivo = $nombrearchivo;

        return $this;
    }

    /**
     * Get nombrearchivo
     *
     * @return string 
     */
    public function getNombrearchivo()
    {
        return $this->nombrearchivo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Facturas
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set idtipodocumento
     *
     * @param integer $idtipodocumento
     * @return Facturas
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
     * Set importeBrutoVencido
     *
     * @param integer $importeBrutoVencido
     * @return Facturas
     */
    public function setImporteBrutoVencido($importeBrutoVencido)
    {
        $this->importeBrutoVencido = $importeBrutoVencido;

        return $this;
    }

    /**
     * Get importeBrutoVencido
     *
     * @return integer 
     */
    public function getImporteBrutoVencido()
    {
        return $this->importeBrutoVencido;
    }

    /**
     * Set idmoneda
     *
     * @param integer $idmoneda
     * @return Facturas
     */
    public function setIdmoneda($idmoneda)
    {
        $this->idmoneda = $idmoneda;

        return $this;
    }

    /**
     * Get idmoneda
     *
     * @return integer 
     */
    public function getIdmoneda()
    {
        return $this->idmoneda;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Facturas
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set migrated
     *
     * @param integer $migrated
     * @return Facturas
     */
    public function setMigrated($migrated)
    {
        $this->migrated = $migrated;

        return $this;
    }

    /**
     * Get migrated
     *
     * @return integer 
     */
    public function getMigrated()
    {
        return $this->migrated;
    }
}
