<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilTipogeneracion
 *
 * @ORM\Table(name="pagofacil_tipogeneracion")
 * @ORM\Entity
 */
class PagofacilTipogeneracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipogeneracion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipogeneracion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;



    /**
     * Get idtipogeneracion
     *
     * @return integer 
     */
    public function getIdtipogeneracion()
    {
        return $this->idtipogeneracion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return PagofacilTipogeneracion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PagofacilTipogeneracion
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
