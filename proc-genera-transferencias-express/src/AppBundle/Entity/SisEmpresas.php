<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisEmpresas
 *
 * @ORM\Table(name="sis_empresas")
 * @ORM\Entity
 */
class SisEmpresas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idempresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;



    /**
     * Get idempresa
     *
     * @return integer 
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisEmpresas
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
     * Set estado
     *
     * @param boolean $estado
     * @return SisEmpresas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
