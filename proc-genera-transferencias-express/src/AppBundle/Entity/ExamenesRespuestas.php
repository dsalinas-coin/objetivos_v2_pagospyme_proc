<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenesRespuestas
 *
 * @ORM\Table(name="examenes_respuestas")
 * @ORM\Entity
 */
class ExamenesRespuestas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrespuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrespuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpregunta", type="integer", nullable=false)
     */
    private $idpregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=500, nullable=false)
     */
    private $detalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="correcto", type="smallint", nullable=false)
     */
    private $correcto;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;



    /**
     * Get idrespuesta
     *
     * @return integer 
     */
    public function getIdrespuesta()
    {
        return $this->idrespuesta;
    }

    /**
     * Set idpregunta
     *
     * @param integer $idpregunta
     * @return ExamenesRespuestas
     */
    public function setIdpregunta($idpregunta)
    {
        $this->idpregunta = $idpregunta;

        return $this;
    }

    /**
     * Get idpregunta
     *
     * @return integer 
     */
    public function getIdpregunta()
    {
        return $this->idpregunta;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return ExamenesRespuestas
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set correcto
     *
     * @param integer $correcto
     * @return ExamenesRespuestas
     */
    public function setCorrecto($correcto)
    {
        $this->correcto = $correcto;

        return $this;
    }

    /**
     * Get correcto
     *
     * @return integer 
     */
    public function getCorrecto()
    {
        return $this->correcto;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ExamenesRespuestas
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
