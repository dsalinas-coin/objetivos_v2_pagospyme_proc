<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feriados
 *
 * @ORM\Table(name="feriados")
 * @ORM\Entity
 */
class Feriados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfecha", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=100, nullable=true)
     */
    private $motivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idfecha
     *
     * @return integer 
     */
    public function getIdfecha()
    {
        return $this->idfecha;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Feriados
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
     * Set motivo
     *
     * @param string $motivo
     * @return Feriados
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Feriados
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
