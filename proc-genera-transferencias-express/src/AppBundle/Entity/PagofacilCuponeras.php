<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilCuponeras
 *
 * @ORM\Table(name="pagofacil_cuponeras")
 * @ORM\Entity
 */
class PagofacilCuponeras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcuponera", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuponera;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_generacion", type="datetime", nullable=true)
     */
    private $fechaGeneracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant_cuotas", type="smallint", nullable=true)
     */
    private $cantCuotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_total", type="integer", nullable=true)
     */
    private $importeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=50, nullable=true)
     */
    private $ruta;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipogeneracion", type="smallint", nullable=true)
     */
    private $idtipogeneracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desactivacion", type="datetime", nullable=true)
     */
    private $fechaDesactivacion;



    /**
     * Get idcuponera
     *
     * @return integer 
     */
    public function getIdcuponera()
    {
        return $this->idcuponera;
    }

    /**
     * Set fechaGeneracion
     *
     * @param \DateTime $fechaGeneracion
     * @return PagofacilCuponeras
     */
    public function setFechaGeneracion($fechaGeneracion)
    {
        $this->fechaGeneracion = $fechaGeneracion;

        return $this;
    }

    /**
     * Get fechaGeneracion
     *
     * @return \DateTime 
     */
    public function getFechaGeneracion()
    {
        return $this->fechaGeneracion;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return PagofacilCuponeras
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
     * Set idservicio
     *
     * @param integer $idservicio
     * @return PagofacilCuponeras
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
     * Set cantCuotas
     *
     * @param integer $cantCuotas
     * @return PagofacilCuponeras
     */
    public function setCantCuotas($cantCuotas)
    {
        $this->cantCuotas = $cantCuotas;

        return $this;
    }

    /**
     * Get cantCuotas
     *
     * @return integer 
     */
    public function getCantCuotas()
    {
        return $this->cantCuotas;
    }

    /**
     * Set importeTotal
     *
     * @param integer $importeTotal
     * @return PagofacilCuponeras
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
     * Set ruta
     *
     * @param string $ruta
     * @return PagofacilCuponeras
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return PagofacilCuponeras
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
     * Set idtipogeneracion
     *
     * @param integer $idtipogeneracion
     * @return PagofacilCuponeras
     */
    public function setIdtipogeneracion($idtipogeneracion)
    {
        $this->idtipogeneracion = $idtipogeneracion;

        return $this;
    }

    /**
     * Get idtipogeneracion
     *
     * @return integer 
     */
    public function getIdtipogeneracion()
    {
        return $this->idtipogeneracion;
    }

    /**
     * Set fechaDesactivacion
     *
     * @param \DateTime $fechaDesactivacion
     * @return PagofacilCuponeras
     */
    public function setFechaDesactivacion($fechaDesactivacion)
    {
        $this->fechaDesactivacion = $fechaDesactivacion;

        return $this;
    }

    /**
     * Get fechaDesactivacion
     *
     * @return \DateTime 
     */
    public function getFechaDesactivacion()
    {
        return $this->fechaDesactivacion;
    }
}
