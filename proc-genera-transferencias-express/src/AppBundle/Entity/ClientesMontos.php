<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesMontos
 *
 * @ORM\Table(name="clientes_montos", indexes={@ORM\Index(name="IDX_BF941872B18C94B", columns={"idcliente"})})
 * @ORM\Entity
 */
class ClientesMontos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmonto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmonto;

    /**
     * @var integer
     *
     * @ORM\Column(name="monto", type="integer", nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=300, nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcliente", referencedColumnName="idcliente")
     * })
     */
    private $idcliente;



    /**
     * Get idmonto
     *
     * @return integer 
     */
    public function getIdmonto()
    {
        return $this->idmonto;
    }

    /**
     * Set monto
     *
     * @param integer $monto
     * @return ClientesMontos
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return integer 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return ClientesMontos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ClientesMontos
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return ClientesMontos
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
     * Set idcliente
     *
     * @param \AppBundle\Entity\Clientes $idcliente
     * @return ClientesMontos
     */
    public function setIdcliente(\AppBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AppBundle\Entity\Clientes 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }
}
