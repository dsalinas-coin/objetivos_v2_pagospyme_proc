<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosCredenciales
 *
 * @ORM\Table(name="cobros_credenciales", indexes={@ORM\Index(name="NonClusteredIndex-20130603-134917", columns={"emailenviado"}), @ORM\Index(name="idx_cobros_credenciales_idservicio", columns={"idservicio"}), @ORM\Index(name="idx_cobros_credenciales_fechaingreso", columns={"fechaingreso", "terminal_id"}), @ORM\Index(name="idx_cobros_credenciales_fechapago", columns={"fechapago"}), @ORM\Index(name="NonClusteredIndex-20131216-162513", columns={"idcredencial"}), @ORM\Index(name="idx_cobros_credenciales_idpago", columns={"idpago"})})
 * @ORM\Entity
 */
class CobrosCredenciales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrocred", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobrocred;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="idcredencial", type="string", length=20, nullable=true)
     */
    private $idcredencial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="estadoaplic", type="integer", nullable=true)
     */
    private $estadoaplic;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal_id", type="string", length=6, nullable=true)
     */
    private $terminalId;

    /**
     * @var string
     *
     * @ORM\Column(name="term_seq_num", type="string", length=50, nullable=true)
     */
    private $termSeqNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaprocesopf", type="datetime", nullable=true)
     */
    private $fechaprocesopf;

    /**
     * @var integer
     *
     * @ORM\Column(name="emailenviado", type="smallint", nullable=false)
     */
    private $emailenviado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcobro_estado", type="smallint", nullable=true)
     */
    private $idcobroEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainformado_ol", type="datetime", nullable=true)
     */
    private $fechainformadoOl;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmedio", type="integer", nullable=false)
     */
    private $idmedio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaconfirmacion", type="datetime", nullable=true)
     */
    private $fechaconfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechareversa", type="datetime", nullable=true)
     */
    private $fechareversa;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpago", type="integer", nullable=true)
     */
    private $idpago;



    /**
     * Get idcobrocred
     *
     * @return integer 
     */
    public function getIdcobrocred()
    {
        return $this->idcobrocred;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return CobrosCredenciales
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
     * Set idcredencial
     *
     * @param string $idcredencial
     * @return CobrosCredenciales
     */
    public function setIdcredencial($idcredencial)
    {
        $this->idcredencial = $idcredencial;

        return $this;
    }

    /**
     * Get idcredencial
     *
     * @return string 
     */
    public function getIdcredencial()
    {
        return $this->idcredencial;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return CobrosCredenciales
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
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return CobrosCredenciales
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime 
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return CobrosCredenciales
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
     * Set estadoaplic
     *
     * @param integer $estadoaplic
     * @return CobrosCredenciales
     */
    public function setEstadoaplic($estadoaplic)
    {
        $this->estadoaplic = $estadoaplic;

        return $this;
    }

    /**
     * Get estadoaplic
     *
     * @return integer 
     */
    public function getEstadoaplic()
    {
        return $this->estadoaplic;
    }

    /**
     * Set terminalId
     *
     * @param string $terminalId
     * @return CobrosCredenciales
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * Get terminalId
     *
     * @return string 
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * Set termSeqNum
     *
     * @param string $termSeqNum
     * @return CobrosCredenciales
     */
    public function setTermSeqNum($termSeqNum)
    {
        $this->termSeqNum = $termSeqNum;

        return $this;
    }

    /**
     * Get termSeqNum
     *
     * @return string 
     */
    public function getTermSeqNum()
    {
        return $this->termSeqNum;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return CobrosCredenciales
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
     * Set fechaprocesopf
     *
     * @param \DateTime $fechaprocesopf
     * @return CobrosCredenciales
     */
    public function setFechaprocesopf($fechaprocesopf)
    {
        $this->fechaprocesopf = $fechaprocesopf;

        return $this;
    }

    /**
     * Get fechaprocesopf
     *
     * @return \DateTime 
     */
    public function getFechaprocesopf()
    {
        return $this->fechaprocesopf;
    }

    /**
     * Set emailenviado
     *
     * @param integer $emailenviado
     * @return CobrosCredenciales
     */
    public function setEmailenviado($emailenviado)
    {
        $this->emailenviado = $emailenviado;

        return $this;
    }

    /**
     * Get emailenviado
     *
     * @return integer 
     */
    public function getEmailenviado()
    {
        return $this->emailenviado;
    }

    /**
     * Set idcobroEstado
     *
     * @param integer $idcobroEstado
     * @return CobrosCredenciales
     */
    public function setIdcobroEstado($idcobroEstado)
    {
        $this->idcobroEstado = $idcobroEstado;

        return $this;
    }

    /**
     * Get idcobroEstado
     *
     * @return integer 
     */
    public function getIdcobroEstado()
    {
        return $this->idcobroEstado;
    }

    /**
     * Set fechainformadoOl
     *
     * @param \DateTime $fechainformadoOl
     * @return CobrosCredenciales
     */
    public function setFechainformadoOl($fechainformadoOl)
    {
        $this->fechainformadoOl = $fechainformadoOl;

        return $this;
    }

    /**
     * Get fechainformadoOl
     *
     * @return \DateTime 
     */
    public function getFechainformadoOl()
    {
        return $this->fechainformadoOl;
    }

    /**
     * Set idmedio
     *
     * @param integer $idmedio
     * @return CobrosCredenciales
     */
    public function setIdmedio($idmedio)
    {
        $this->idmedio = $idmedio;

        return $this;
    }

    /**
     * Get idmedio
     *
     * @return integer 
     */
    public function getIdmedio()
    {
        return $this->idmedio;
    }

    /**
     * Set fechaconfirmacion
     *
     * @param \DateTime $fechaconfirmacion
     * @return CobrosCredenciales
     */
    public function setFechaconfirmacion($fechaconfirmacion)
    {
        $this->fechaconfirmacion = $fechaconfirmacion;

        return $this;
    }

    /**
     * Get fechaconfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaconfirmacion()
    {
        return $this->fechaconfirmacion;
    }

    /**
     * Set fechareversa
     *
     * @param \DateTime $fechareversa
     * @return CobrosCredenciales
     */
    public function setFechareversa($fechareversa)
    {
        $this->fechareversa = $fechareversa;

        return $this;
    }

    /**
     * Get fechareversa
     *
     * @return \DateTime 
     */
    public function getFechareversa()
    {
        return $this->fechareversa;
    }

    /**
     * Set idpago
     *
     * @param integer $idpago
     * @return CobrosCredenciales
     */
    public function setIdpago($idpago)
    {
        $this->idpago = $idpago;

        return $this;
    }

    /**
     * Get idpago
     *
     * @return integer 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }
}
