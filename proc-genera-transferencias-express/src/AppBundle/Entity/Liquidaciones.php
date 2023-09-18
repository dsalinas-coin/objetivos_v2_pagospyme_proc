<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liquidaciones
 *
 * @ORM\Table(name="liquidaciones", indexes={@ORM\Index(name="IDX_6262B86DEA2DE6EC", columns={"idarchivo"})})
 * @ORM\Entity
 */
class Liquidaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idliquidacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliquidacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var \Archivos
     *
     * @ORM\ManyToOne(targetEntity="Archivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarchivo", referencedColumnName="idarchivo")
     * })
     */
    private $idarchivo;



    /**
     * Get idliquidacion
     *
     * @return integer 
     */
    public function getIdliquidacion()
    {
        return $this->idliquidacion;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Liquidaciones
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Liquidaciones
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Liquidaciones
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
     * Set idarchivo
     *
     * @param \AppBundle\Entity\Archivos $idarchivo
     * @return Liquidaciones
     */
    public function setIdarchivo(\AppBundle\Entity\Archivos $idarchivo = null)
    {
        $this->idarchivo = $idarchivo;

        return $this;
    }

    /**
     * Get idarchivo
     *
     * @return \AppBundle\Entity\Archivos 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }
}
