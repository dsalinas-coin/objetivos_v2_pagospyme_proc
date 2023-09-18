<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientosSubtipos
 *
 * @ORM\Table(name="movimientos_subtipos")
 * @ORM\Entity
 */
class MovimientosSubtipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento_subtipo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovimientoSubtipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento_tipo", type="smallint", nullable=false)
     */
    private $idmovimientoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=100, nullable=true)
     */
    private $observaciones;



    /**
     * Get idmovimientoSubtipo
     *
     * @return integer 
     */
    public function getIdmovimientoSubtipo()
    {
        return $this->idmovimientoSubtipo;
    }

    /**
     * Set idmovimientoTipo
     *
     * @param integer $idmovimientoTipo
     * @return MovimientosSubtipos
     */
    public function setIdmovimientoTipo($idmovimientoTipo)
    {
        $this->idmovimientoTipo = $idmovimientoTipo;

        return $this;
    }

    /**
     * Get idmovimientoTipo
     *
     * @return integer 
     */
    public function getIdmovimientoTipo()
    {
        return $this->idmovimientoTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return MovimientosSubtipos
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return MovimientosSubtipos
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
