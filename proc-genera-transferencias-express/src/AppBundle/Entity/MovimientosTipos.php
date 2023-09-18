<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientosTipos
 *
 * @ORM\Table(name="movimientos_tipos")
 * @ORM\Entity
 */
class MovimientosTipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento_tipo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovimientoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=300, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



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
     * @return MovimientosTipos
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
     * @return MovimientosTipos
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

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return MovimientosTipos
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
     * Set estado
     *
     * @param integer $estado
     * @return MovimientosTipos
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
