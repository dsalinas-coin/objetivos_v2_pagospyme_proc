<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointerCentros
 *
 * @ORM\Table(name="pointer_centros")
 * @ORM\Entity
 */
class PointerCentros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcentro", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcentro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=50, nullable=true)
     */
    private $zona;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="smallint", nullable=true)
     */
    private $tipo;



    /**
     * Get idcentro
     *
     * @return integer 
     */
    public function getIdcentro()
    {
        return $this->idcentro;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return PointerCentros
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return PointerCentros
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set zona
     *
     * @param string $zona
     * @return PointerCentros
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return PointerCentros
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
