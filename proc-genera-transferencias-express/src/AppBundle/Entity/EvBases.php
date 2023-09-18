<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvBases
 *
 * @ORM\Table(name="ev_bases")
 * @ORM\Entity
 */
class EvBases
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbase;

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
     * @ORM\Column(name="nombrearchivo", type="string", length=100, nullable=true)
     */
    private $nombrearchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idbase
     *
     * @return integer 
     */
    public function getIdbase()
    {
        return $this->idbase;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return EvBases
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
     * @return EvBases
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
     * Set nombrearchivo
     *
     * @param string $nombrearchivo
     * @return EvBases
     */
    public function setNombrearchivo($nombrearchivo)
    {
        $this->nombrearchivo = $nombrearchivo;

        return $this;
    }

    /**
     * Get nombrearchivo
     *
     * @return string 
     */
    public function getNombrearchivo()
    {
        return $this->nombrearchivo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return EvBases
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
