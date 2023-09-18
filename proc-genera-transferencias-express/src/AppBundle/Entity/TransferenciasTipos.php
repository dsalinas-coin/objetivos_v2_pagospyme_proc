<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransferenciasTipos
 *
 * @ORM\Table(name="transferencias_tipos")
 * @ORM\Entity
 */
class TransferenciasTipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtransferencia_tipo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransferenciaTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idtransferenciaTipo
     *
     * @return integer
     */
    public function getIdtransferenciaTipo()
    {
        return $this->idtransferenciaTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TransferenciasTipos
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
