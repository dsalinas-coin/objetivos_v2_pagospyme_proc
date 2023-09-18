<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasMotivosmora
 *
 * @ORM\Table(name="notas_motivosmora")
 * @ORM\Entity
 */
class NotasMotivosmora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmotivomora", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmotivomora;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idmotivomora
     *
     * @return integer 
     */
    public function getIdmotivomora()
    {
        return $this->idmotivomora;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NotasMotivosmora
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
