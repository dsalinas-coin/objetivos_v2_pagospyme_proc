<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosBanelco
 *
 * @ORM\Table(name="archivos_banelco", indexes={@ORM\Index(name="IDX_90C729D6EA2DE6EC", columns={"idarchivo"})})
 * @ORM\Entity
 */
class ArchivosBanelco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivo_banelco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchivoBanelco;

    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivo_banelco_tipo", type="integer", nullable=false)
     */
    private $idarchivoBanelcoTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var \Archivos
     *
     * @ORM\ManyToOne(targetEntity="Archivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarchivo", referencedColumnName="idarchivo")
     * })
     */
    private $idarchivo;



    /**
     * Get idarchivoBanelco
     *
     * @return integer 
     */
    public function getIdarchivoBanelco()
    {
        return $this->idarchivoBanelco;
    }

    /**
     * Set idarchivoBanelcoTipo
     *
     * @param integer $idarchivoBanelcoTipo
     * @return ArchivosBanelco
     */
    public function setIdarchivoBanelcoTipo($idarchivoBanelcoTipo)
    {
        $this->idarchivoBanelcoTipo = $idarchivoBanelcoTipo;

        return $this;
    }

    /**
     * Get idarchivoBanelcoTipo
     *
     * @return integer 
     */
    public function getIdarchivoBanelcoTipo()
    {
        return $this->idarchivoBanelcoTipo;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ArchivosBanelco
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ArchivosBanelco
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return ArchivosBanelco
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
     * Set idarchivo
     *
     * @param \AppBundle\Entity\Archivos $idarchivo
     * @return ArchivosBanelco
     */
    public function setIdarchivo(\AppBundle\Entity\Archivos $idarchivo = null)
    {
        $this->idarchivo = $idarchivo;

        return $this;
    }

    /**
     * Get idarchivo
     *
     * @return \AppBundle\Entity\Archivos 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }
}
