<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examenes
 *
 * @ORM\Table(name="examenes")
 * @ORM\Entity
 */
class Examenes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idexamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant_preguntas", type="smallint", nullable=true)
     */
    private $cantPreguntas;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=300, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idexamen
     *
     * @return integer 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Examenes
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set cantPreguntas
     *
     * @param integer $cantPreguntas
     * @return Examenes
     */
    public function setCantPreguntas($cantPreguntas)
    {
        $this->cantPreguntas = $cantPreguntas;

        return $this;
    }

    /**
     * Get cantPreguntas
     *
     * @return integer 
     */
    public function getCantPreguntas()
    {
        return $this->cantPreguntas;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Examenes
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
     * @return Examenes
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
