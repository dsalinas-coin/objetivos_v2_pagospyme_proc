<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediospagoClientes
 *
 * @ORM\Table(name="mediospago_clientes", indexes={@ORM\Index(name="idx_mediospago_clientes_idcliente", columns={"idcliente"})})
 * @ORM\Entity
 */
class MediospagoClientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmedio_cli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedioCli;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmedio", type="integer", nullable=false)
     */
    private $idmedio;

    /**
     * @var string
     *
     * @ORM\Column(name="numcliente", type="string", length=50, nullable=true)
     */
    private $numcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="numcliente2", type="string", length=50, nullable=true)
     */
    private $numcliente2;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxcuotas", type="integer", nullable=true)
     */
    private $maxcuotas;



    /**
     * Get idmedioCli
     *
     * @return integer 
     */
    public function getIdmedioCli()
    {
        return $this->idmedioCli;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return MediospagoClientes
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
     * Set idmedio
     *
     * @param integer $idmedio
     * @return MediospagoClientes
     */
    public function setIdmedio($idmedio)
    {
        $this->idmedio = $idmedio;

        return $this;
    }

    /**
     * Get idmedio
     *
     * @return integer 
     */
    public function getIdmedio()
    {
        return $this->idmedio;
    }

    /**
     * Set numcliente
     *
     * @param string $numcliente
     * @return MediospagoClientes
     */
    public function setNumcliente($numcliente)
    {
        $this->numcliente = $numcliente;

        return $this;
    }

    /**
     * Get numcliente
     *
     * @return string 
     */
    public function getNumcliente()
    {
        return $this->numcliente;
    }

    /**
     * Set numcliente2
     *
     * @param string $numcliente2
     * @return MediospagoClientes
     */
    public function setNumcliente2($numcliente2)
    {
        $this->numcliente2 = $numcliente2;

        return $this;
    }

    /**
     * Get numcliente2
     *
     * @return string 
     */
    public function getNumcliente2()
    {
        return $this->numcliente2;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return MediospagoClientes
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
     * Set maxcuotas
     *
     * @param integer $maxcuotas
     * @return MediospagoClientes
     */
    public function setMaxcuotas($maxcuotas)
    {
        $this->maxcuotas = $maxcuotas;

        return $this;
    }

    /**
     * Get maxcuotas
     *
     * @return integer 
     */
    public function getMaxcuotas()
    {
        return $this->maxcuotas;
    }
}
