<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiciosAdicionales
 *
 * @ORM\Table(name="servicios_adicionales")
 * @ORM\Entity
 */
class ServiciosAdicionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio_adicional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservicioAdicional;

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
     * Get idservicioAdicional
     *
     * @return integer 
     */
    public function getIdservicioAdicional()
    {
        return $this->idservicioAdicional;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ServiciosAdicionales
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
     * @return ServiciosAdicionales
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
