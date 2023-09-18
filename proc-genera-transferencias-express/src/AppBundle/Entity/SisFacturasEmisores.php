<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisFacturasEmisores
 *
 * @ORM\Table(name="sis_facturas_emisores")
 * @ORM\Entity
 */
class SisFacturasEmisores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura_emisor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacturaEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=11, nullable=true)
     */
    private $cuit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="punto_venta", type="integer", nullable=true)
     */
    private $puntoVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit_web", type="string", length=13, nullable=true)
     */
    private $cuitWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="ingresos_brutos", type="string", length=50, nullable=true)
     */
    private $ingresosBrutos;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_actividades", type="string", length=50, nullable=true)
     */
    private $inicioActividades;

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="string", length=50, nullable=true)
     */
    private $iva;



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
     * Set cuit
     *
     * @param string $cuit
     * @return SisFacturasEmisores
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return SisFacturasEmisores
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set puntoVenta
     *
     * @param integer $puntoVenta
     * @return SisFacturasEmisores
     */
    public function setPuntoVenta($puntoVenta)
    {
        $this->puntoVenta = $puntoVenta;

        return $this;
    }

    /**
     * Get puntoVenta
     *
     * @return integer 
     */
    public function getPuntoVenta()
    {
        return $this->puntoVenta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisFacturasEmisores
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
     * Set cuitWeb
     *
     * @param string $cuitWeb
     * @return SisFacturasEmisores
     */
    public function setCuitWeb($cuitWeb)
    {
        $this->cuitWeb = $cuitWeb;

        return $this;
    }

    /**
     * Get cuitWeb
     *
     * @return string 
     */
    public function getCuitWeb()
    {
        return $this->cuitWeb;
    }

    /**
     * Set ingresosBrutos
     *
     * @param string $ingresosBrutos
     * @return SisFacturasEmisores
     */
    public function setIngresosBrutos($ingresosBrutos)
    {
        $this->ingresosBrutos = $ingresosBrutos;

        return $this;
    }

    /**
     * Get ingresosBrutos
     *
     * @return string 
     */
    public function getIngresosBrutos()
    {
        return $this->ingresosBrutos;
    }

    /**
     * Set inicioActividades
     *
     * @param string $inicioActividades
     * @return SisFacturasEmisores
     */
    public function setInicioActividades($inicioActividades)
    {
        $this->inicioActividades = $inicioActividades;

        return $this;
    }

    /**
     * Get inicioActividades
     *
     * @return string 
     */
    public function getInicioActividades()
    {
        return $this->inicioActividades;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return SisFacturasEmisores
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }
}
