<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasdebitoAplicacion
 *
 * @ORM\Table(name="notasdebito_aplicacion", indexes={@ORM\Index(name="idnotacredito", columns={"idnotadebito"})})
 * @ORM\Entity
 */
class NotasdebitoAplicacion
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
     * @ORM\Column(name="idnotadebito", type="integer", nullable=true)
     */
    private $idnotadebito;

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
     * Set idnotadebito
     *
     * @param integer $idnotadebito
     * @return NotasdebitoAplicacion
     */
    public function setIdnotadebito($idnotadebito)
    {
        $this->idnotadebito = $idnotadebito;

        return $this;
    }

    /**
     * Get idnotadebito
     *
     * @return integer 
     */
    public function getIdnotadebito()
    {
        return $this->idnotadebito;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return NotasdebitoAplicacion
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
     * @return NotasdebitoAplicacion
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
     * @return NotasdebitoAplicacion
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
     * @return NotasdebitoAplicacion
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
     * @return NotasdebitoAplicacion
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
     * @return NotasdebitoAplicacion
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
