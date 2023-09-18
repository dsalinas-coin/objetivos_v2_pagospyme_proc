<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DebitosEstados
 *
 * @ORM\Table(name="debitos_estados")
 * @ORM\Entity
 */
class DebitosEstados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=3, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;



    /**
     * Get idestado
     *
     * @return integer 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return DebitosEstados
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return DebitosEstados
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
     * @return DebitosEstados
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
