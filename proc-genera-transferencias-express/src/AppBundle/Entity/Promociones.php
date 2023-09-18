<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promociones
 *
 * @ORM\Table(name="promociones")
 * @ORM\Entity
 */
class Promociones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromocion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromocion;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=600, nullable=false)
     */
    private $contenido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;



    /**
     * Get idpromocion
     *
     * @return integer 
     */
    public function getIdpromocion()
    {
        return $this->idpromocion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Promociones
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return Promociones
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Promociones
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
