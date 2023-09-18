<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosTarjetas
 *
 * @ORM\Table(name="cobros_tarjetas")
 * @ORM\Entity
 */
class CobrosTarjetas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idoperacion", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idfactura;

    /**
     * @var string
     *
     * @ORM\Column(name="idcobro", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idcobro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="datetime", nullable=true)
     */
    private $fechaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="medio", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $medio;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", length=8, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;



    /**
     * Get idoperacion
     *
     * @return string 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set idfactura
     *
     * @param string $idfactura
     * @return CobrosTarjetas
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
     * Set idcobro
     *
     * @param string $idcobro
     * @return CobrosTarjetas
     */
    public function setIdcobro($idcobro)
    {
        $this->idcobro = $idcobro;

        return $this;
    }

    /**
     * Get idcobro
     *
     * @return string 
     */
    public function getIdcobro()
    {
        return $this->idcobro;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return CobrosTarjetas
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
     * Set medio
     *
     * @param string $medio
     * @return CobrosTarjetas
     */
    public function setMedio($medio)
    {
        $this->medio = $medio;

        return $this;
    }

    /**
     * Get medio
     *
     * @return string 
     */
    public function getMedio()
    {
        return $this->medio;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return CobrosTarjetas
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
     * Set estado
     *
     * @param integer $estado
     * @return CobrosTarjetas
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
}
