<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogItems
 *
 * @ORM\Table(name="log_items", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__log_items__220B0B18", columns={"idlog"})})
 * @ORM\Entity
 */
class LogItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="idlog", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlog;

    /**
     * @var string
     *
     * @ORM\Column(name="idoperacion", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="idproceso", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="idtipo", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idtipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="idcliente", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="idusuario", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="idservicio", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idfactura;

    /**
     * @var string
     *
     * @ORM\Column(name="idcobro", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idcobro;

    /**
     * @var string
     *
     * @ORM\Column(name="idnotacredito", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idnotacredito;

    /**
     * @var string
     *
     * @ORM\Column(name="idcobro_fail", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idcobroFail;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", length=8, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



    /**
     * Get idlog
     *
     * @return string 
     */
    public function getIdlog()
    {
        return $this->idlog;
    }

    /**
     * Set idoperacion
     *
     * @param string $idoperacion
     * @return LogItems
     */
    public function setIdoperacion($idoperacion)
    {
        $this->idoperacion = $idoperacion;

        return $this;
    }

    /**
     * Get idoperacion
     *
     * @return string 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set idproceso
     *
     * @param string $idproceso
     * @return LogItems
     */
    public function setIdproceso($idproceso)
    {
        $this->idproceso = $idproceso;

        return $this;
    }

    /**
     * Get idproceso
     *
     * @return string 
     */
    public function getIdproceso()
    {
        return $this->idproceso;
    }

    /**
     * Set idtipo
     *
     * @param string $idtipo
     * @return LogItems
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return string 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return LogItems
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return LogItems
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return string 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idusuario
     *
     * @param string $idusuario
     * @return LogItems
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return string 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idservicio
     *
     * @param string $idservicio
     * @return LogItems
     */
    public function setIdservicio($idservicio)
    {
        $this->idservicio = $idservicio;

        return $this;
    }

    /**
     * Get idservicio
     *
     * @return string 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set idfactura
     *
     * @param string $idfactura
     * @return LogItems
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return string 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set idcobro
     *
     * @param string $idcobro
     * @return LogItems
     */
    public function setIdcobro($idcobro)
    {
        $this->idcobro = $idcobro;

        return $this;
    }

    /**
     * Get idcobro
     *
     * @return string 
     */
    public function getIdcobro()
    {
        return $this->idcobro;
    }

    /**
     * Set idnotacredito
     *
     * @param string $idnotacredito
     * @return LogItems
     */
    public function setIdnotacredito($idnotacredito)
    {
        $this->idnotacredito = $idnotacredito;

        return $this;
    }

    /**
     * Get idnotacredito
     *
     * @return string 
     */
    public function getIdnotacredito()
    {
        return $this->idnotacredito;
    }

    /**
     * Set idcobroFail
     *
     * @param string $idcobroFail
     * @return LogItems
     */
    public function setIdcobroFail($idcobroFail)
    {
        $this->idcobroFail = $idcobroFail;

        return $this;
    }

    /**
     * Get idcobroFail
     *
     * @return string 
     */
    public function getIdcobroFail()
    {
        return $this->idcobroFail;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return LogItems
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
     * Set estado
     *
     * @param integer $estado
     * @return LogItems
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
