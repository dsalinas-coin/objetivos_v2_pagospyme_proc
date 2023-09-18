<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsBasetextos
 *
 * @ORM\Table(name="sms_basetextos")
 * @ORM\Entity
 */
class SmsBasetextos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtexto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtexto;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="smallint", nullable=true)
     */
    private $etapa;

    /**
     * @var string
     *
     * @ORM\Column(name="textoConsulta", type="string", length=200, nullable=true)
     */
    private $textoconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="textoRespuesta", type="string", length=200, nullable=true)
     */
    private $textorespuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="irEtapa", type="smallint", nullable=true)
     */
    private $iretapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idtexto
     *
     * @return integer 
     */
    public function getIdtexto()
    {
        return $this->idtexto;
    }

    /**
     * Set etapa
     *
     * @param integer $etapa
     * @return SmsBasetextos
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return integer 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set textoconsulta
     *
     * @param string $textoconsulta
     * @return SmsBasetextos
     */
    public function setTextoconsulta($textoconsulta)
    {
        $this->textoconsulta = $textoconsulta;

        return $this;
    }

    /**
     * Get textoconsulta
     *
     * @return string 
     */
    public function getTextoconsulta()
    {
        return $this->textoconsulta;
    }

    /**
     * Set textorespuesta
     *
     * @param string $textorespuesta
     * @return SmsBasetextos
     */
    public function setTextorespuesta($textorespuesta)
    {
        $this->textorespuesta = $textorespuesta;

        return $this;
    }

    /**
     * Get textorespuesta
     *
     * @return string 
     */
    public function getTextorespuesta()
    {
        return $this->textorespuesta;
    }

    /**
     * Set iretapa
     *
     * @param integer $iretapa
     * @return SmsBasetextos
     */
    public function setIretapa($iretapa)
    {
        $this->iretapa = $iretapa;

        return $this;
    }

    /**
     * Get iretapa
     *
     * @return integer 
     */
    public function getIretapa()
    {
        return $this->iretapa;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return SmsBasetextos
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
