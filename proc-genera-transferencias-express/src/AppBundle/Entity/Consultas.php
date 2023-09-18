<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultas
 *
 * @ORM\Table(name="consultas")
 * @ORM\Entity
 */
class Consultas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idconsulta", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="idlistado", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idlistado;

    /**
     * @var string
     *
     * @ORM\Column(name="idcliente", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



    /**
     * Get idconsulta
     *
     * @return string 
     */
    public function getIdconsulta()
    {
        return $this->idconsulta;
    }

    /**
     * Set idlistado
     *
     * @param string $idlistado
     * @return Consultas
     */
    public function setIdlistado($idlistado)
    {
        $this->idlistado = $idlistado;

        return $this;
    }

    /**
     * Get idlistado
     *
     * @return string 
     */
    public function getIdlistado()
    {
        return $this->idlistado;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return Consultas
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Consultas
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Consultas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Consultas
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
