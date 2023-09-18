<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotascreditoAplicacion
 *
 * @ORM\Table(name="notascredito_aplicacion", indexes={@ORM\Index(name="idnotacredito", columns={"idnotacredito"})})
 * @ORM\Entity
 */
class NotascreditoAplicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idaplicacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnotacredito", type="integer", nullable=true)
     */
    private $idnotacredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaplicacion", type="datetime", nullable=true)
     */
    private $fechaaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoaplicacion", type="smallint", nullable=true)
     */
    private $idtipoaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idasoc", type="integer", nullable=true)
     */
    private $idasoc;



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
     * Set idnotacredito
     *
     * @param integer $idnotacredito
     * @return NotascreditoAplicacion
     */
    public function setIdnotacredito($idnotacredito)
    {
        $this->idnotacredito = $idnotacredito;

        return $this;
    }

    /**
     * Get idnotacredito
     *
     * @return integer 
     */
    public function getIdnotacredito()
    {
        return $this->idnotacredito;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return NotascreditoAplicacion
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
     * Set fechaaplicacion
     *
     * @param \DateTime $fechaaplicacion
     * @return NotascreditoAplicacion
     */
    public function setFechaaplicacion($fechaaplicacion)
    {
        $this->fechaaplicacion = $fechaaplicacion;

        return $this;
    }

    /**
     * Get fechaaplicacion
     *
     * @return \DateTime 
     */
    public function getFechaaplicacion()
    {
        return $this->fechaaplicacion;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return NotascreditoAplicacion
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return NotascreditoAplicacion
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
     * Set idtipoaplicacion
     *
     * @param integer $idtipoaplicacion
     * @return NotascreditoAplicacion
     */
    public function setIdtipoaplicacion($idtipoaplicacion)
    {
        $this->idtipoaplicacion = $idtipoaplicacion;

        return $this;
    }

    /**
     * Get idtipoaplicacion
     *
     * @return integer 
     */
    public function getIdtipoaplicacion()
    {
        return $this->idtipoaplicacion;
    }

    /**
     * Set idasoc
     *
     * @param integer $idasoc
     * @return NotascreditoAplicacion
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
}
