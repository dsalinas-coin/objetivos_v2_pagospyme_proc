<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidades
 *
 * @ORM\Table(name="localidades")
 * @ORM\Entity
 */
class Localidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="idloc", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idloc;

    /**
     * @var string
     *
     * @ORM\Column(name="idpartido", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idpartido;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=40, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=1000, nullable=true)
     */
    private $ubicacion;



    /**
     * Get idloc
     *
     * @return string 
     */
    public function getIdloc()
    {
        return $this->idloc;
    }

    /**
     * Set idpartido
     *
     * @param string $idpartido
     * @return Localidades
     */
    public function setIdpartido($idpartido)
    {
        $this->idpartido = $idpartido;

        return $this;
    }

    /**
     * Get idpartido
     *
     * @return string 
     */
    public function getIdpartido()
    {
        return $this->idpartido;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Localidades
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
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Localidades
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
}
