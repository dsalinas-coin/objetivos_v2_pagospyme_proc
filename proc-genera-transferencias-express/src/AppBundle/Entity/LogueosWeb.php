<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogueosWeb
 *
 * @ORM\Table(name="logueos_web", indexes={@ORM\Index(name="resultado", columns={"resultado"})})
 * @ORM\Entity
 */
class LogueosWeb
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlogueo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlogueo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechalogueo", type="datetime", nullable=true)
     */
    private $fechalogueo;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=100, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100, nullable=true)
     */
    private $clave;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultado", type="smallint", nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionip", type="string", length=50, nullable=true)
     */
    private $direccionip;

    /**
     * @var string
     *
     * @ORM\Column(name="useragent", type="string", length=300, nullable=true)
     */
    private $useragent;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=100, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="bajonivel", type="string", length=50, nullable=true)
     */
    private $bajonivel;



    /**
     * Get idlogueo
     *
     * @return integer 
     */
    public function getIdlogueo()
    {
        return $this->idlogueo;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return LogueosWeb
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
     * Set fechalogueo
     *
     * @param \DateTime $fechalogueo
     * @return LogueosWeb
     */
    public function setFechalogueo($fechalogueo)
    {
        $this->fechalogueo = $fechalogueo;

        return $this;
    }

    /**
     * Get fechalogueo
     *
     * @return \DateTime 
     */
    public function getFechalogueo()
    {
        return $this->fechalogueo;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return LogueosWeb
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return LogueosWeb
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set resultado
     *
     * @param integer $resultado
     * @return LogueosWeb
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return integer 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set direccionip
     *
     * @param string $direccionip
     * @return LogueosWeb
     */
    public function setDireccionip($direccionip)
    {
        $this->direccionip = $direccionip;

        return $this;
    }

    /**
     * Get direccionip
     *
     * @return string 
     */
    public function getDireccionip()
    {
        return $this->direccionip;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     * @return LogueosWeb
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return LogueosWeb
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set bajonivel
     *
     * @param string $bajonivel
     * @return LogueosWeb
     */
    public function setBajonivel($bajonivel)
    {
        $this->bajonivel = $bajonivel;

        return $this;
    }

    /**
     * Get bajonivel
     *
     * @return string 
     */
    public function getBajonivel()
    {
        return $this->bajonivel;
    }
}
