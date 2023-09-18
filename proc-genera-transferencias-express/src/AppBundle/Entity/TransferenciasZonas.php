<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransferenciasZonas
 *
 * @ORM\Table(name="transferencias_zonas")
 * @ORM\Entity
 */
class TransferenciasZonas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idzona", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idzona;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idzona
     *
     * @return integer
     */
    public function getIdzona()
    {
        return $this->idzona;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TransferenciasZonas
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
