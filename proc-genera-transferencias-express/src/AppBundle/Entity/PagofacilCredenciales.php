<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilCredenciales
 *
 * @ORM\Table(name="pagofacil_credenciales", indexes={@ORM\Index(name="idx_pagofacil_credenciales_codcredencialpf", columns={"codcredencialpf"}), @ORM\Index(name="idx_pagofacil_credenciales_codcredencialpf_recortado", columns={"codcredencialpf_recortado"}), @ORM\Index(name="idx_pagofacil_credenciales_idcliente", columns={"idcliente"}), @ORM\Index(name="idx_pagofacil_credenciales_ixdj3534kddvnvl", columns={"idcredencial", "codcredencialpf", "idservicio"})})
 * @ORM\Entity
 */
class PagofacilCredenciales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcredencial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcredencial;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="codcredencialpf", type="string", length=16, nullable=true)
     */
    private $codcredencialpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="prefijo", type="integer", nullable=true)
     */
    private $prefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro", type="integer", nullable=true)
     */
    private $nro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechageneracion", type="datetime", nullable=true)
     */
    private $fechageneracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="codcredencialpf_recortado", type="string", length=10, nullable=true)
     */
    private $codcredencialpfRecortado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivo", type="integer", nullable=true)
     */
    private $idarchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="credonline", type="smallint", nullable=true)
     */
    private $credonline;



    /**
     * Get idcredencial
     *
     * @return integer 
     */
    public function getIdcredencial()
    {
        return $this->idcredencial;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return PagofacilCredenciales
     */
    public function setIdservicio($idservicio)
    {
        $this->idservicio = $idservicio;

        return $this;
    }

    /**
     * Get idservicio
     *
     * @return integer 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set codcredencialpf
     *
     * @param string $codcredencialpf
     * @return PagofacilCredenciales
     */
    public function setCodcredencialpf($codcredencialpf)
    {
        $this->codcredencialpf = $codcredencialpf;

        return $this;
    }

    /**
     * Get codcredencialpf
     *
     * @return string 
     */
    public function getCodcredencialpf()
    {
        return $this->codcredencialpf;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return PagofacilCredenciales
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
     * Set prefijo
     *
     * @param integer $prefijo
     * @return PagofacilCredenciales
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * Get prefijo
     *
     * @return integer 
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * Set nro
     *
     * @param integer $nro
     * @return PagofacilCredenciales
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
     * Set fechageneracion
     *
     * @param \DateTime $fechageneracion
     * @return PagofacilCredenciales
     */
    public function setFechageneracion($fechageneracion)
    {
        $this->fechageneracion = $fechageneracion;

        return $this;
    }

    /**
     * Get fechageneracion
     *
     * @return \DateTime 
     */
    public function getFechageneracion()
    {
        return $this->fechageneracion;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return PagofacilCredenciales
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set codcredencialpfRecortado
     *
     * @param string $codcredencialpfRecortado
     * @return PagofacilCredenciales
     */
    public function setCodcredencialpfRecortado($codcredencialpfRecortado)
    {
        $this->codcredencialpfRecortado = $codcredencialpfRecortado;

        return $this;
    }

    /**
     * Get codcredencialpfRecortado
     *
     * @return string 
     */
    public function getCodcredencialpfRecortado()
    {
        return $this->codcredencialpfRecortado;
    }

    /**
     * Set idarchivo
     *
     * @param integer $idarchivo
     * @return PagofacilCredenciales
     */
    public function setIdarchivo($idarchivo)
    {
        $this->idarchivo = $idarchivo;

        return $this;
    }

    /**
     * Get idarchivo
     *
     * @return integer 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }

    /**
     * Set credonline
     *
     * @param integer $credonline
     * @return PagofacilCredenciales
     */
    public function setCredonline($credonline)
    {
        $this->credonline = $credonline;

        return $this;
    }

    /**
     * Get credonline
     *
     * @return integer 
     */
    public function getCredonline()
    {
        return $this->credonline;
    }
}
