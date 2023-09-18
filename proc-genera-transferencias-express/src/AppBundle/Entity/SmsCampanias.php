<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsCampanias
 *
 * @ORM\Table(name="sms_campanias")
 * @ORM\Entity
 */
class SmsCampanias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcampania", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcampania;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="datetime", nullable=true)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=2000, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;



    /**
     * Get idcampania
     *
     * @return integer 
     */
    public function getIdcampania()
    {
        return $this->idcampania;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SmsCampanias
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return SmsCampanias
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return SmsCampanias
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SmsCampanias
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return SmsCampanias
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
     * Set activo
     *
     * @param integer $activo
     * @return SmsCampanias
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
