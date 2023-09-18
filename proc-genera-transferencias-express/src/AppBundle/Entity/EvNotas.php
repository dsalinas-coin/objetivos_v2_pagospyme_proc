<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvNotas
 *
 * @ORM\Table(name="ev_notas")
 * @ORM\Entity
 */
class EvNotas
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontacto", type="integer", nullable=true)
     */
    private $idcontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="personacontactada", type="string", length=50, nullable=true)
     */
    private $personacontactada;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=2000, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=true)
     */
    private $idcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="smallint", nullable=true)
     */
    private $idoperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return EvNotas
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
     * Set idcontacto
     *
     * @param integer $idcontacto
     * @return EvNotas
     */
    public function setIdcontacto($idcontacto)
    {
        $this->idcontacto = $idcontacto;

        return $this;
    }

    /**
     * Get idcontacto
     *
     * @return integer 
     */
    public function getIdcontacto()
    {
        return $this->idcontacto;
    }

    /**
     * Set personacontactada
     *
     * @param string $personacontactada
     * @return EvNotas
     */
    public function setPersonacontactada($personacontactada)
    {
        $this->personacontactada = $personacontactada;

        return $this;
    }

    /**
     * Get personacontactada
     *
     * @return string 
     */
    public function getPersonacontactada()
    {
        return $this->personacontactada;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return EvNotas
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
     * Set idcategoria
     *
     * @param integer $idcategoria
     * @return EvNotas
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return EvNotas
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
     * Set estado
     *
     * @param integer $estado
     * @return EvNotas
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
