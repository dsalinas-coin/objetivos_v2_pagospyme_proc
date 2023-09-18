<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosEstados
 *
 * @ORM\Table(name="cobros_estados")
 * @ORM\Entity
 */
class CobrosEstados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobro_estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobroEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;



    /**
     * Get idcobroEstado
     *
     * @return integer 
     */
    public function getIdcobroEstado()
    {
        return $this->idcobroEstado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CobrosEstados
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
     * Set activo
     *
     * @param integer $activo
     * @return CobrosEstados
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
}
