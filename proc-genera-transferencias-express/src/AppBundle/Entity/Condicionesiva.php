<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condicionesiva
 *
 * @ORM\Table(name="condicionesiva")
 * @ORM\Entity
 */
class Condicionesiva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcondicioniva", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcondicioniva;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=50, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo_factura", type="integer", nullable=true)
     */
    private $idtipoFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnuevo", type="integer", nullable=true)
     */
    private $idnuevo;



    /**
     * Get idcondicioniva
     *
     * @return integer 
     */
    public function getIdcondicioniva()
    {
        return $this->idcondicioniva;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Condicionesiva
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
     * Set codigo
     *
     * @param string $codigo
     * @return Condicionesiva
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set idtipoFactura
     *
     * @param integer $idtipoFactura
     * @return Condicionesiva
     */
    public function setIdtipoFactura($idtipoFactura)
    {
        $this->idtipoFactura = $idtipoFactura;

        return $this;
    }

    /**
     * Get idtipoFactura
     *
     * @return integer 
     */
    public function getIdtipoFactura()
    {
        return $this->idtipoFactura;
    }

    /**
     * Set idnuevo
     *
     * @param integer $idnuevo
     * @return Condicionesiva
     */
    public function setIdnuevo($idnuevo)
    {
        $this->idnuevo = $idnuevo;

        return $this;
    }

    /**
     * Get idnuevo
     *
     * @return integer 
     */
    public function getIdnuevo()
    {
        return $this->idnuevo;
    }
}
