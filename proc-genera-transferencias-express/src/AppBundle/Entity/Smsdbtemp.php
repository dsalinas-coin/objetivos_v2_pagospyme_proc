<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smsdbtemp
 *
 * @ORM\Table(name="smsdbtemp", indexes={@ORM\Index(name="telefono", columns={"telefono"})})
 * @ORM\Entity
 */
class Smsdbtemp
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
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="numcliente", type="string", length=50, nullable=false)
     */
    private $numcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="nrodocumento", type="string", length=20, nullable=true)
     */
    private $nrodocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="digito", type="integer", nullable=true)
     */
    private $digito;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=50, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenviado", type="datetime", nullable=true)
     */
    private $fechaenviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="smsenviado", type="smallint", nullable=true)
     */
    private $smsenviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsender", type="smallint", nullable=true)
     */
    private $idsender;



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
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Smsdbtemp
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Smsdbtemp
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
     * Set numcliente
     *
     * @param string $numcliente
     * @return Smsdbtemp
     */
    public function setNumcliente($numcliente)
    {
        $this->numcliente = $numcliente;

        return $this;
    }

    /**
     * Get numcliente
     *
     * @return string 
     */
    public function getNumcliente()
    {
        return $this->numcliente;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Smsdbtemp
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
     * Set nombre
     *
     * @param string $nombre
     * @return Smsdbtemp
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Smsdbtemp
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set nrodocumento
     *
     * @param string $nrodocumento
     * @return Smsdbtemp
     */
    public function setNrodocumento($nrodocumento)
    {
        $this->nrodocumento = $nrodocumento;

        return $this;
    }

    /**
     * Get nrodocumento
     *
     * @return string 
     */
    public function getNrodocumento()
    {
        return $this->nrodocumento;
    }

    /**
     * Set digito
     *
     * @param integer $digito
     * @return Smsdbtemp
     */
    public function setDigito($digito)
    {
        $this->digito = $digito;

        return $this;
    }

    /**
     * Get digito
     *
     * @return integer 
     */
    public function getDigito()
    {
        return $this->digito;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Smsdbtemp
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
     * Set fechaenviado
     *
     * @param \DateTime $fechaenviado
     * @return Smsdbtemp
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
     * Set smsenviado
     *
     * @param integer $smsenviado
     * @return Smsdbtemp
     */
    public function setSmsenviado($smsenviado)
    {
        $this->smsenviado = $smsenviado;

        return $this;
    }

    /**
     * Get smsenviado
     *
     * @return integer 
     */
    public function getSmsenviado()
    {
        return $this->smsenviado;
    }

    /**
     * Set idsender
     *
     * @param integer $idsender
     * @return Smsdbtemp
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
}
