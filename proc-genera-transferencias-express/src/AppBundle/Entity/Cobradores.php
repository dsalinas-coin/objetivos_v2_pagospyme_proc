<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cobradores
 *
 * @ORM\Table(name="cobradores")
 * @ORM\Entity
 */
class Cobradores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobrador;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial", type="string", length=100, nullable=false)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=50, nullable=true)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codpost", type="string", length=20, nullable=true)
     */
    private $codpost;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprovincia", type="integer", nullable=false)
     */
    private $idprovincia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=100, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



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
     * Set razonsocial
     *
     * @param string $razonsocial
     * @return Cobradores
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string 
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cobradores
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Cobradores
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set codpost
     *
     * @param string $codpost
     * @return Cobradores
     */
    public function setCodpost($codpost)
    {
        $this->codpost = $codpost;

        return $this;
    }

    /**
     * Get codpost
     *
     * @return string 
     */
    public function getCodpost()
    {
        return $this->codpost;
    }

    /**
     * Set idprovincia
     *
     * @param integer $idprovincia
     * @return Cobradores
     */
    public function setIdprovincia($idprovincia)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

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
     * Set telefono
     *
     * @param string $telefono
     * @return Cobradores
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
     * Set alias
     *
     * @param string $alias
     * @return Cobradores
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Cobradores
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return Cobradores
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Cobradores
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
