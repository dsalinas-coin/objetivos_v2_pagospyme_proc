<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosSpecial
 *
 * @ORM\Table(name="cobros_special", indexes={@ORM\Index(name="idx_idoperacion", columns={"idoperacion"})})
 * @ORM\Entity
 */
class CobrosSpecial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="idoperacion", type="string", length=50, nullable=false)
     */
    private $idoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="idcliente", type="string", length=10, nullable=false)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=10, nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocliente", type="string", length=100, nullable=true)
     */
    private $nrocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=true)
     */
    private $fechapago;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idoperacion
     *
     * @param string $idoperacion
     * @return CobrosSpecial
     */
    public function setIdoperacion($idoperacion)
    {
        $this->idoperacion = $idoperacion;

        return $this;
    }

    /**
     * Get idoperacion
     *
     * @return string 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return CobrosSpecial
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return string 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CobrosSpecial
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
     * Set estado
     *
     * @param string $estado
     * @return CobrosSpecial
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return CobrosSpecial
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set nrocliente
     *
     * @param string $nrocliente
     * @return CobrosSpecial
     */
    public function setNrocliente($nrocliente)
    {
        $this->nrocliente = $nrocliente;

        return $this;
    }

    /**
     * Get nrocliente
     *
     * @return string 
     */
    public function getNrocliente()
    {
        return $this->nrocliente;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CobrosSpecial
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return CobrosSpecial
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime 
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }
}
