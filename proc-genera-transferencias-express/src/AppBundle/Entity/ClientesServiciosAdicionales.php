<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesServiciosAdicionales
 *
 * @ORM\Table(name="clientes_servicios_adicionales")
 * @ORM\Entity
 */
class ClientesServiciosAdicionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente_servicio_adicional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclienteServicioAdicional;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio_adicional", type="integer", nullable=true)
     */
    private $idservicioAdicional;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="datetime", nullable=true)
     */
    private $fechaalta;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idclienteServicioAdicional
     *
     * @return integer 
     */
    public function getIdclienteServicioAdicional()
    {
        return $this->idclienteServicioAdicional;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ClientesServiciosAdicionales
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
     * Set idservicioAdicional
     *
     * @param integer $idservicioAdicional
     * @return ClientesServiciosAdicionales
     */
    public function setIdservicioAdicional($idservicioAdicional)
    {
        $this->idservicioAdicional = $idservicioAdicional;

        return $this;
    }

    /**
     * Get idservicioAdicional
     *
     * @return integer 
     */
    public function getIdservicioAdicional()
    {
        return $this->idservicioAdicional;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return ClientesServiciosAdicionales
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
     * Set estado
     *
     * @param integer $estado
     * @return ClientesServiciosAdicionales
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
