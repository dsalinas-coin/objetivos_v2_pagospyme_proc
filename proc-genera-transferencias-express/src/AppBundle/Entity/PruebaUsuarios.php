<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PruebaUsuarios
 *
 * @ORM\Table(name="prueba_usuarios", indexes={@ORM\Index(name="IDX_3D06ECA7AD92DF5F", columns={"idpais"})})
 * @ORM\Entity
 */
class PruebaUsuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var \PruebaPaises
     *
     * @ORM\ManyToOne(targetEntity="PruebaPaises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpais", referencedColumnName="idpais")
     * })
     */
    private $idpais;



    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return PruebaUsuarios
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
     * Set idpais
     *
     * @param \AppBundle\Entity\PruebaPaises $idpais
     * @return PruebaUsuarios
     */
    public function setIdpais(\AppBundle\Entity\PruebaPaises $idpais = null)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return \AppBundle\Entity\PruebaPaises 
     */
    public function getIdpais()
    {
        return $this->idpais;
    }
}
