<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias")
 * @ORM\Entity
 */
class Provincias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprovincia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprovincia;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=false)
     */
    private $provincia;



    /**
     * Get idprovincia
     *
     * @return integer 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Provincias
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}
