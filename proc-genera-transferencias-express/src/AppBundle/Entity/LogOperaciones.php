<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogOperaciones
 *
 * @ORM\Table(name="log_operaciones", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__log_operaciones__294D0584", columns={"idoperacion"})})
 * @ORM\Entity
 */
class LogOperaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="idoperacion", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="smallint", nullable=false)
     */
    private $tipo;



    /**
     * Get idoperacion
     *
     * @return string 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return LogOperaciones
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
     * Set tipo
     *
     * @param integer $tipo
     * @return LogOperaciones
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
