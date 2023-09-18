<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsEnvios
 *
 * @ORM\Table(name="sms_envios", indexes={@ORM\Index(name="idsmsdbtemp", columns={"idsmsdbtemp_borrar"})})
 * @ORM\Entity
 */
class SmsEnvios
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
     * @var integer
     *
     * @ORM\Column(name="idcampania", type="integer", nullable=true)
     */
    private $idcampania;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=200, nullable=true)
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenviado", type="datetime", nullable=true)
     */
    private $fechaenviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="enviado", type="smallint", nullable=true)
     */
    private $enviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsender", type="smallint", nullable=true)
     */
    private $idsender;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsmsdbtemp_borrar", type="integer", nullable=true)
     */
    private $idsmsdbtempBorrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="coltemp_borrar", type="integer", nullable=true)
     */
    private $coltempBorrar;



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
     * Set idcampania
     *
     * @param integer $idcampania
     * @return SmsEnvios
     */
    public function setIdcampania($idcampania)
    {
        $this->idcampania = $idcampania;

        return $this;
    }

    /**
     * Get idcampania
     *
     * @return integer 
     */
    public function getIdcampania()
    {
        return $this->idcampania;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SmsEnvios
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
     * Set telefono
     *
     * @param string $telefono
     * @return SmsEnvios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return SmsEnvios
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set fechaenviado
     *
     * @param \DateTime $fechaenviado
     * @return SmsEnvios
     */
    public function setFechaenviado($fechaenviado)
    {
        $this->fechaenviado = $fechaenviado;

        return $this;
    }

    /**
     * Get fechaenviado
     *
     * @return \DateTime 
     */
    public function getFechaenviado()
    {
        return $this->fechaenviado;
    }

    /**
     * Set enviado
     *
     * @param integer $enviado
     * @return SmsEnvios
     */
    public function setEnviado($enviado)
    {
        $this->enviado = $enviado;

        return $this;
    }

    /**
     * Get enviado
     *
     * @return integer 
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Set idsender
     *
     * @param integer $idsender
     * @return SmsEnvios
     */
    public function setIdsender($idsender)
    {
        $this->idsender = $idsender;

        return $this;
    }

    /**
     * Get idsender
     *
     * @return integer 
     */
    public function getIdsender()
    {
        return $this->idsender;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return SmsEnvios
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return SmsEnvios
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idsmsdbtempBorrar
     *
     * @param integer $idsmsdbtempBorrar
     * @return SmsEnvios
     */
    public function setIdsmsdbtempBorrar($idsmsdbtempBorrar)
    {
        $this->idsmsdbtempBorrar = $idsmsdbtempBorrar;

        return $this;
    }

    /**
     * Get idsmsdbtempBorrar
     *
     * @return integer 
     */
    public function getIdsmsdbtempBorrar()
    {
        return $this->idsmsdbtempBorrar;
    }

    /**
     * Set coltempBorrar
     *
     * @param integer $coltempBorrar
     * @return SmsEnvios
     */
    public function setColtempBorrar($coltempBorrar)
    {
        $this->coltempBorrar = $coltempBorrar;

        return $this;
    }

    /**
     * Get coltempBorrar
     *
     * @return integer 
     */
    public function getColtempBorrar()
    {
        return $this->coltempBorrar;
    }
}
