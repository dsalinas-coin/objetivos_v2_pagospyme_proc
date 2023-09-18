<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturasItems
 *
 * @ORM\Table(name="facturas_items", indexes={@ORM\Index(name="idx_idfactura", columns={"idfactura"}), @ORM\Index(name="identityarchivo", columns={"identityarchivo"})})
 * @ORM\Entity
 */
class FacturasItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="idfactura_item", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacturaItem;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=400, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_unitario", type="integer", nullable=false)
     */
    private $importeUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="bonificacion", type="float", precision=24, scale=0, nullable=true)
     */
    private $bonificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_total", type="integer", nullable=false)
     */
    private $importeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=400, nullable=true)
     */
    private $observacion;

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
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="identityarchivo", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $identityarchivo;



    /**
     * Get idfacturaItem
     *
     * @return string 
     */
    public function getIdfacturaItem()
    {
        return $this->idfacturaItem;
    }

    /**
     * Set idfactura
     *
     * @param string $idfactura
     * @return FacturasItems
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return FacturasItems
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FacturasItems
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set importeUnitario
     *
     * @param integer $importeUnitario
     * @return FacturasItems
     */
    public function setImporteUnitario($importeUnitario)
    {
        $this->importeUnitario = $importeUnitario;

        return $this;
    }

    /**
     * Get importeUnitario
     *
     * @return integer 
     */
    public function getImporteUnitario()
    {
        return $this->importeUnitario;
    }

    /**
     * Set bonificacion
     *
     * @param float $bonificacion
     * @return FacturasItems
     */
    public function setBonificacion($bonificacion)
    {
        $this->bonificacion = $bonificacion;

        return $this;
    }

    /**
     * Get bonificacion
     *
     * @return float 
     */
    public function getBonificacion()
    {
        return $this->bonificacion;
    }

    /**
     * Set importeTotal
     *
     * @param integer $importeTotal
     * @return FacturasItems
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
     * Set observacion
     *
     * @param string $observacion
     * @return FacturasItems
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
     * Set tipo
     *
     * @param integer $tipo
     * @return FacturasItems
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
     * @return FacturasItems
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return FacturasItems
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
     * Set identityarchivo
     *
     * @param string $identityarchivo
     * @return FacturasItems
     */
    public function setIdentityarchivo($identityarchivo)
    {
        $this->identityarchivo = $identityarchivo;

        return $this;
    }

    /**
     * Get identityarchivo
     *
     * @return string 
     */
    public function getIdentityarchivo()
    {
        return $this->identityarchivo;
    }
}
