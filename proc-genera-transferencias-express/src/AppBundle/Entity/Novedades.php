<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Novedades
 *
 * @ORM\Table(name="novedades")
 * @ORM\Entity
 */
class Novedades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnovedad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnovedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=500, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1000, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivo", type="integer", nullable=true)
     */
    private $idarchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;



    /**
     * Get idnovedad
     *
     * @return integer 
     */
    public function getIdnovedad()
    {
        return $this->idnovedad;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Novedades
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Novedades
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
     * Set titulo
     *
     * @param string $titulo
     * @return Novedades
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Novedades
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
     * Set idarchivo
     *
     * @param integer $idarchivo
     * @return Novedades
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
     * Set activo
     *
     * @param integer $activo
     * @return Novedades
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
}
