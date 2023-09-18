<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonas
 *
 * @ORM\Table(name="zonas")
 * @ORM\Entity
 */
class Zonas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idzona", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idzona;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrador", type="integer", nullable=true)
     */
    private $idcobrador;

    /**
     * @var string
     *
     * @ORM\Column(name="idprovincia", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idprovincia;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=40, nullable=false)
     */
    private $descripcion;



    /**
     * Get idzona
     *
     * @return string 
     */
    public function getIdzona()
    {
        return $this->idzona;
    }

    /**
     * Set idcobrador
     *
     * @param integer $idcobrador
     * @return Zonas
     */
    public function setIdcobrador($idcobrador)
    {
        $this->idcobrador = $idcobrador;

        return $this;
    }

    /**
     * Get idcobrador
     *
     * @return integer 
     */
    public function getIdcobrador()
    {
        return $this->idcobrador;
    }

    /**
     * Set idprovincia
     *
     * @param string $idprovincia
     * @return Zonas
     */
    public function setIdprovincia($idprovincia)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return string 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Zonas
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
