<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvListados
 *
 * @ORM\Table(name="ev_listados")
 * @ORM\Entity
 */
class EvListados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlistado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlistado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaasignacion", type="datetime", nullable=true)
     */
    private $fechaasignacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idlistado
     *
     * @return integer 
     */
    public function getIdlistado()
    {
        return $this->idlistado;
    }

    /**
     * Set fechaasignacion
     *
     * @param \DateTime $fechaasignacion
     * @return EvListados
     */
    public function setFechaasignacion($fechaasignacion)
    {
        $this->fechaasignacion = $fechaasignacion;

        return $this;
    }

    /**
     * Get fechaasignacion
     *
     * @return \DateTime 
     */
    public function getFechaasignacion()
    {
        return $this->fechaasignacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return EvListados
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
