<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvContactos
 *
 * @ORM\Table(name="ev_contactos")
 * @ORM\Entity
 */
class EvContactos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbase", type="integer", nullable=true)
     */
    private $idbase;

    /**
     * @var string
     *
     * @ORM\Column(name="idexterno", type="string", length=50, nullable=true)
     */
    private $idexterno;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=50, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial", type="string", length=100, nullable=true)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="tipocliente", type="string", length=50, nullable=true)
     */
    private $tipocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=120, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=50, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=50, nullable=true)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=200, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=200, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecontacto", type="string", length=50, nullable=true)
     */
    private $nombrecontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidocontacto", type="string", length=50, nullable=true)
     */
    private $apellidocontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="rolcontacto", type="string", length=50, nullable=true)
     */
    private $rolcontacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="smallint", nullable=true)
     */
    private $idoperador;



    /**
     * Get idcontacto
     *
     * @return integer 
     */
    public function getIdcontacto()
    {
        return $this->idcontacto;
    }

    /**
     * Set idbase
     *
     * @param integer $idbase
     * @return EvContactos
     */
    public function setIdbase($idbase)
    {
        $this->idbase = $idbase;

        return $this;
    }

    /**
     * Get idbase
     *
     * @return integer 
     */
    public function getIdbase()
    {
        return $this->idbase;
    }

    /**
     * Set idexterno
     *
     * @param string $idexterno
     * @return EvContactos
     */
    public function setIdexterno($idexterno)
    {
        $this->idexterno = $idexterno;

        return $this;
    }

    /**
     * Get idexterno
     *
     * @return string 
     */
    public function getIdexterno()
    {
        return $this->idexterno;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return EvContactos
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     * @return EvContactos
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
     * Set tipocliente
     *
     * @param string $tipocliente
     * @return EvContactos
     */
    public function setTipocliente($tipocliente)
    {
        $this->tipocliente = $tipocliente;

        return $this;
    }

    /**
     * Get tipocliente
     *
     * @return string 
     */
    public function getTipocliente()
    {
        return $this->tipocliente;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return EvContactos
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
     * Set cp
     *
     * @param string $cp
     * @return EvContactos
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return EvContactos
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
     * Set provincia
     *
     * @param string $provincia
     * @return EvContactos
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

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return EvContactos
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return EvContactos
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return EvContactos
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nombrecontacto
     *
     * @param string $nombrecontacto
     * @return EvContactos
     */
    public function setNombrecontacto($nombrecontacto)
    {
        $this->nombrecontacto = $nombrecontacto;

        return $this;
    }

    /**
     * Get nombrecontacto
     *
     * @return string 
     */
    public function getNombrecontacto()
    {
        return $this->nombrecontacto;
    }

    /**
     * Set apellidocontacto
     *
     * @param string $apellidocontacto
     * @return EvContactos
     */
    public function setApellidocontacto($apellidocontacto)
    {
        $this->apellidocontacto = $apellidocontacto;

        return $this;
    }

    /**
     * Get apellidocontacto
     *
     * @return string 
     */
    public function getApellidocontacto()
    {
        return $this->apellidocontacto;
    }

    /**
     * Set rolcontacto
     *
     * @param string $rolcontacto
     * @return EvContactos
     */
    public function setRolcontacto($rolcontacto)
    {
        $this->rolcontacto = $rolcontacto;

        return $this;
    }

    /**
     * Get rolcontacto
     *
     * @return string 
     */
    public function getRolcontacto()
    {
        return $this->rolcontacto;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return EvContactos
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }
}
