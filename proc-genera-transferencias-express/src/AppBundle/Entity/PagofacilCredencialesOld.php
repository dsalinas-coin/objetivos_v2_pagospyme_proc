<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilCredencialesOld
 *
 * @ORM\Table(name="pagofacil_credenciales_old")
 * @ORM\Entity
 */
class PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
     * @return PagofacilCredencialesOld
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
}
