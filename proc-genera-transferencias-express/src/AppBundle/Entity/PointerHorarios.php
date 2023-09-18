<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointerHorarios
 *
 * @ORM\Table(name="pointer_horarios")
 * @ORM\Entity
 */
class PointerHorarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhorario", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcentro", type="smallint", nullable=true)
     */
    private $idcentro;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;



    /**
     * Get idhorario
     *
     * @return integer 
     */
    public function getIdhorario()
    {
        return $this->idhorario;
    }

    /**
     * Set idcentro
     *
     * @param integer $idcentro
     * @return PointerHorarios
     */
    public function setIdcentro($idcentro)
    {
        $this->idcentro = $idcentro;

        return $this;
    }

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return PointerHorarios
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
