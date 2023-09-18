<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisConceptos
 *
 * @ORM\Table(name="sis_conceptos")
 * @ORM\Entity
 */
class SisConceptos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconcepto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=50, nullable=true)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="idempresa", type="string", length=10, nullable=true)
     */
    private $idempresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="mesconcepto", type="integer", nullable=true)
     */
    private $mesconcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="es_abono_minimo", type="boolean", nullable=true)
     */
    private $esAbonoMinimo;



    /**
     * Get idconcepto
     *
     * @return integer 
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SisConceptos
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

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return SisConceptos
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set idempresa
     *
     * @param string $idempresa
     * @return SisConceptos
     */
    public function setIdempresa($idempresa)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return string 
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set mesconcepto
     *
     * @param integer $mesconcepto
     * @return SisConceptos
     */
    public function setMesconcepto($mesconcepto)
    {
        $this->mesconcepto = $mesconcepto;

        return $this;
    }

    /**
     * Get mesconcepto
     *
     * @return integer 
     */
    public function getMesconcepto()
    {
        return $this->mesconcepto;
    }

    /**
     * Set esAbonoMinimo
     *
     * @param boolean $esAbonoMinimo
     * @return SisConceptos
     */
    public function setEsAbonoMinimo($esAbonoMinimo)
    {
        $this->esAbonoMinimo = $esAbonoMinimo;

        return $this;
    }

    /**
     * Get esAbonoMinimo
     *
     * @return boolean 
     */
    public function getEsAbonoMinimo()
    {
        return $this->esAbonoMinimo;
    }
}
