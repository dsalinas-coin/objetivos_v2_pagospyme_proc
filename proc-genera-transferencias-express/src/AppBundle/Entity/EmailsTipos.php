<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsTipos
 *
 * @ORM\Table(name="emails_tipos", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__emails_tipos__1269A02C", columns={"idtipo"})})
 * @ORM\Entity
 */
class EmailsTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="idtipo", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=100, nullable=true)
     */
    private $observaciones;



    /**
     * Get idtipo
     *
     * @return string 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EmailsTipos
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
     * @return EmailsTipos
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
