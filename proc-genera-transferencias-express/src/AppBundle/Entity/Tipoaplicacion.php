<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoaplicacion
 *
 * @ORM\Table(name="tipoaplicacion")
 * @ORM\Entity
 */
class Tipoaplicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoaplicacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoaplicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="campo_relacionado", type="string", length=50, nullable=true)
     */
    private $campoRelacionado;



    /**
     * Get idtipoaplicacion
     *
     * @return integer 
     */
    public function getIdtipoaplicacion()
    {
        return $this->idtipoaplicacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tipoaplicacion
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
     * Set campoRelacionado
     *
     * @param string $campoRelacionado
     * @return Tipoaplicacion
     */
    public function setCampoRelacionado($campoRelacionado)
    {
        $this->campoRelacionado = $campoRelacionado;

        return $this;
    }

    /**
     * Get campoRelacionado
     *
     * @return string 
     */
    public function getCampoRelacionado()
    {
        return $this->campoRelacionado;
    }
}
