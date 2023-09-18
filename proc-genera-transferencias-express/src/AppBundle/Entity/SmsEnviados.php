<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsEnviados
 *
 * @ORM\Table(name="sms_enviados", indexes={@ORM\Index(name="destinatario", columns={"destinatario"})})
 * @ORM\Entity
 */
class SmsEnviados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsms", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenvio", type="datetime", nullable=true)
     */
    private $fechaenvio;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatario", type="string", length=50, nullable=true)
     */
    private $destinatario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=true)
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=200, nullable=true)
     */
    private $texto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsesion", type="integer", nullable=true)
     */
    private $idsesion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsms_envios", type="integer", nullable=true)
     */
    private $idsmsEnvios;



    /**
     * Get idsms
     *
     * @return integer 
     */
    public function getIdsms()
    {
        return $this->idsms;
    }

    /**
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return SmsEnviados
     */
    public function setFechaenvio($fechaenvio)
    {
        $this->fechaenvio = $fechaenvio;

        return $this;
    }

    /**
     * Get fechaenvio
     *
     * @return \DateTime 
     */
    public function getFechaenvio()
    {
        return $this->fechaenvio;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     * @return SmsEnviados
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string 
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     * @return SmsEnviados
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

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
     * Set texto
     *
     * @param string $texto
     * @return SmsEnviados
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set idsesion
     *
     * @param integer $idsesion
     * @return SmsEnviados
     */
    public function setIdsesion($idsesion)
    {
        $this->idsesion = $idsesion;

        return $this;
    }

    /**
     * Get idsesion
     *
     * @return integer 
     */
    public function getIdsesion()
    {
        return $this->idsesion;
    }

    /**
     * Set idsmsEnvios
     *
     * @param integer $idsmsEnvios
     * @return SmsEnviados
     */
    public function setIdsmsEnvios($idsmsEnvios)
    {
        $this->idsmsEnvios = $idsmsEnvios;

        return $this;
    }

    /**
     * Get idsmsEnvios
     *
     * @return integer 
     */
    public function getIdsmsEnvios()
    {
        return $this->idsmsEnvios;
    }
}
