<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasCateg
 *
 * @ORM\Table(name="notas_categ")
 * @ORM\Entity
 */
class NotasCateg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="explicacion", type="text", length=8, nullable=true)
     */
    private $explicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactable", type="smallint", nullable=true)
     */
    private $contactable;



    /**
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NotasCateg
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
     * Set explicacion
     *
     * @param string $explicacion
     * @return NotasCateg
     */
    public function setExplicacion($explicacion)
    {
        $this->explicacion = $explicacion;

        return $this;
    }

    /**
     * Get explicacion
     *
     * @return string 
     */
    public function getExplicacion()
    {
        return $this->explicacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return NotasCateg
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

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return NotasCateg
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
     * Set contactable
     *
     * @param integer $contactable
     * @return NotasCateg
     */
    public function setContactable($contactable)
    {
        $this->contactable = $contactable;

        return $this;
    }

    /**
     * Get contactable
     *
     * @return integer 
     */
    public function getContactable()
    {
        return $this->contactable;
    }
}
