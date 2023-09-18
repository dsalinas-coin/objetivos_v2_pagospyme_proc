<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsRecibidos
 *
 * @ORM\Table(name="sms_recibidos")
 * @ORM\Entity
 */
class SmsRecibidos
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
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="remitente", type="string", length=50, nullable=true)
     */
    private $remitente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=true)
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=500, nullable=true)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharecibido", type="datetime", nullable=true)
     */
    private $fecharecibido;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsesion", type="integer", nullable=true)
     */
    private $idsesion;



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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SmsRecibidos
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set remitente
     *
     * @param string $remitente
     * @return SmsRecibidos
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return string 
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     * @return SmsRecibidos
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
     * @return SmsRecibidos
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
     * Set fecharecibido
     *
     * @param \DateTime $fecharecibido
     * @return SmsRecibidos
     */
    public function setFecharecibido($fecharecibido)
    {
        $this->fecharecibido = $fecharecibido;

        return $this;
    }

    /**
     * Get fecharecibido
     *
     * @return \DateTime 
     */
    public function getFecharecibido()
    {
        return $this->fecharecibido;
    }

    /**
     * Set idsesion
     *
     * @param integer $idsesion
     * @return SmsRecibidos
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
}
