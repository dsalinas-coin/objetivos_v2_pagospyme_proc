<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilMasivosDet
 *
 * @ORM\Table(name="pagofacil_masivos_det", indexes={@ORM\Index(name="idx_pfmd_idasoc_idaplicacion", columns={"idasoc", "idtipocomprobante"}), @ORM\Index(name="idx_pfmd_idtipocomprobante_idaplicacion", columns={"idtipocomprobante", "idaplicacion"}), @ORM\Index(name="_dta_index_pagofacil_masivos_det_5_1269631616__K2_K5", columns={"idcupon", "idaplicacion"})})
 * @ORM\Entity
 */
class PagofacilMasivosDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetalle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=true)
     */
    private $idcupon;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipocomprobante", type="smallint", nullable=true)
     */
    private $idtipocomprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idasoc", type="integer", nullable=true)
     */
    private $idasoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="idaplicacion", type="integer", nullable=true)
     */
    private $idaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeparcial", type="integer", nullable=true)
     */
    private $importeparcial;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeparcial2", type="integer", nullable=true)
     */
    private $importeparcial2;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=150, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadestransito", type="datetime", nullable=true)
     */
    private $fechadestransito;



    /**
     * Get iddetalle
     *
     * @return integer 
     */
    public function getIddetalle()
    {
        return $this->iddetalle;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return PagofacilMasivosDet
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
     * Set idcupon
     *
     * @param integer $idcupon
     * @return PagofacilMasivosDet
     */
    public function setIdcupon($idcupon)
    {
        $this->idcupon = $idcupon;

        return $this;
    }

    /**
     * Get idcupon
     *
     * @return integer 
     */
    public function getIdcupon()
    {
        return $this->idcupon;
    }

    /**
     * Set idtipocomprobante
     *
     * @param integer $idtipocomprobante
     * @return PagofacilMasivosDet
     */
    public function setIdtipocomprobante($idtipocomprobante)
    {
        $this->idtipocomprobante = $idtipocomprobante;

        return $this;
    }

    /**
     * Get idtipocomprobante
     *
     * @return integer 
     */
    public function getIdtipocomprobante()
    {
        return $this->idtipocomprobante;
    }

    /**
     * Set idasoc
     *
     * @param integer $idasoc
     * @return PagofacilMasivosDet
     */
    public function setIdasoc($idasoc)
    {
        $this->idasoc = $idasoc;

        return $this;
    }

    /**
     * Get idasoc
     *
     * @return integer 
     */
    public function getIdasoc()
    {
        return $this->idasoc;
    }

    /**
     * Set idaplicacion
     *
     * @param integer $idaplicacion
     * @return PagofacilMasivosDet
     */
    public function setIdaplicacion($idaplicacion)
    {
        $this->idaplicacion = $idaplicacion;

        return $this;
    }

    /**
     * Get idaplicacion
     *
     * @return integer 
     */
    public function getIdaplicacion()
    {
        return $this->idaplicacion;
    }

    /**
     * Set importeparcial
     *
     * @param integer $importeparcial
     * @return PagofacilMasivosDet
     */
    public function setImporteparcial($importeparcial)
    {
        $this->importeparcial = $importeparcial;

        return $this;
    }

    /**
     * Get importeparcial
     *
     * @return integer 
     */
    public function getImporteparcial()
    {
        return $this->importeparcial;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return PagofacilMasivosDet
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
     * Set importeparcial2
     *
     * @param integer $importeparcial2
     * @return PagofacilMasivosDet
     */
    public function setImporteparcial2($importeparcial2)
    {
        $this->importeparcial2 = $importeparcial2;

        return $this;
    }

    /**
     * Get importeparcial2
     *
     * @return integer 
     */
    public function getImporteparcial2()
    {
        return $this->importeparcial2;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return PagofacilMasivosDet
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechadestransito
     *
     * @param \DateTime $fechadestransito
     * @return PagofacilMasivosDet
     */
    public function setFechadestransito($fechadestransito)
    {
        $this->fechadestransito = $fechadestransito;

        return $this;
    }

    /**
     * Get fechadestransito
     *
     * @return \DateTime 
     */
    public function getFechadestransito()
    {
        return $this->fechadestransito;
    }
}
