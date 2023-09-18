<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposidentificacion
 *
 * @ORM\Table(name="tiposidentificacion")
 * @ORM\Entity
 */
class Tiposidentificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoidentificacion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoidentificacion;

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
     * Get idtipoidentificacion
     *
     * @return integer 
     */
    public function getIdtipoidentificacion()
    {
        return $this->idtipoidentificacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tiposidentificacion
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
     * @return Tiposidentificacion
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
}
