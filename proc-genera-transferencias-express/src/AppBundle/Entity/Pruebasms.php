<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pruebasms
 *
 * @ORM\Table(name="pruebasms")
 * @ORM\Entity
 */
class Pruebasms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsms", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsms;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="smsenviado", type="smallint", nullable=true)
     */
    private $smsenviado;



    /**
     * Get idsms
     *
     * @return integer 
     */
    public function getIdsms()
    {
        return $this->idsms;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Pruebasms
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Pruebasms
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set smsenviado
     *
     * @param integer $smsenviado
     * @return Pruebasms
     */
    public function setSmsenviado($smsenviado)
    {
        $this->smsenviado = $smsenviado;

        return $this;
    }

    /**
     * Get smsenviado
     *
     * @return integer 
     */
    public function getSmsenviado()
    {
        return $this->smsenviado;
    }
}
