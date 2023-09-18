<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PruebaPaises
 *
 * @ORM\Table(name="prueba_paises")
 * @ORM\Entity
 */
class PruebaPaises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpais;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;



    /**
     * Get idpais
     *
     * @return integer 
     */
    public function getIdpais()
    {
        return $this->idpais;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PruebaPaises
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
