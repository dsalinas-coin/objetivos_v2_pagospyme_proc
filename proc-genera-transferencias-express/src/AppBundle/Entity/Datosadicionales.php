<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datosadicionales
 *
 * @ORM\Table(name="datosadicionales")
 * @ORM\Entity
 */
class Datosadicionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddatoadic", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddatoadic;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="smallint", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro", type="smallint", nullable=true)
     */
    private $nro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecampo", type="string", length=20, nullable=true)
     */
    private $nombrecampo;



    /**
     * Get iddatoadic
     *
     * @return integer 
     */
    public function getIddatoadic()
    {
        return $this->iddatoadic;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Datosadicionales
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set nro
     *
     * @param integer $nro
     * @return Datosadicionales
     */
    public function setNro($nro)
    {
        $this->nro = $nro;

        return $this;
    }

    /**
     * Get nro
     *
     * @return integer 
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set nombrecampo
     *
     * @param string $nombrecampo
     * @return Datosadicionales
     */
    public function setNombrecampo($nombrecampo)
    {
        $this->nombrecampo = $nombrecampo;

        return $this;
    }

    /**
     * Get nombrecampo
     *
     * @return string 
     */
    public function getNombrecampo()
    {
        return $this->nombrecampo;
    }
}
