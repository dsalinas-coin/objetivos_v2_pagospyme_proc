<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table(name="partidos")
 * @ORM\Entity
 */
class Partidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="idpartido", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpartido;

    /**
     * @var string
     *
     * @ORM\Column(name="idzona", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idzona;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=40, nullable=true)
     */
    private $descripcion;



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
     * Set idzona
     *
     * @param string $idzona
     * @return Partidos
     */
    public function setIdzona($idzona)
    {
        $this->idzona = $idzona;

        return $this;
    }

    /**
     * Get idzona
     *
     * @return string 
     */
    public function getIdzona()
    {
        return $this->idzona;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Partidos
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
}
