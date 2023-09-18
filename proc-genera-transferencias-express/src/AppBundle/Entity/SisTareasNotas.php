<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareasNotas
 *
 * @ORM\Table(name="sis_tareas_notas")
 * @ORM\Entity
 */
class SisTareasNotas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnota;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=-1, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtarea", type="integer", nullable=true)
     */
    private $idtarea;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgente", type="smallint", nullable=false)
     */
    private $urgente;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="publico", type="smallint", nullable=false)
     */
    private $publico;



    /**
     * Get idnota
     *
     * @return integer 
     */
    public function getIdnota()
    {
        return $this->idnota;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return SisTareasNotas
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SisTareasNotas
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisTareasNotas
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
     * Set idtarea
     *
     * @param integer $idtarea
     * @return SisTareasNotas
     */
    public function setIdtarea($idtarea)
    {
        $this->idtarea = $idtarea;

        return $this;
    }

    /**
     * Get idtarea
     *
     * @return integer 
     */
    public function getIdtarea()
    {
        return $this->idtarea;
    }

    /**
     * Set urgente
     *
     * @param integer $urgente
     * @return SisTareasNotas
     */
    public function setUrgente($urgente)
    {
        $this->urgente = $urgente;

        return $this;
    }

    /**
     * Get urgente
     *
     * @return integer 
     */
    public function getUrgente()
    {
        return $this->urgente;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return SisTareasNotas
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
     * Set publico
     *
     * @param integer $publico
     * @return SisTareasNotas
     */
    public function setPublico($publico)
    {
        $this->publico = $publico;

        return $this;
    }

    /**
     * Get publico
     *
     * @return integer 
     */
    public function getPublico()
    {
        return $this->publico;
    }
}
