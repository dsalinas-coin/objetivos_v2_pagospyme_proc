<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cobrosparciales
 *
 * @ORM\Table(name="cobrosparciales", indexes={@ORM\Index(name="idfactura", columns={"idfactura"}), @ORM\Index(name="fechapago", columns={"fechapago"}), @ORM\Index(name="importeaplicado", columns={"importe"}), @ORM\Index(name="idx_cobrosparciales_fechaingreso", columns={"fechaingreso"}), @ORM\Index(name="idx_cobrosparciales_idfactura-importe-fechaingreso-fechapago", columns={"idfactura", "importe", "fechaingreso", "fechapago"}), @ORM\Index(name="NonClusteredIndex-20160804-113017", columns={"anulado"}), @ORM\Index(name="idx_cobrosparciales_idpago", columns={"idpago"}), @ORM\Index(name="idx_cobrosparciales_identidad", columns={"identidad"})})
 * @ORM\Entity
 */
class Cobrosparciales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobrop;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

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
     * @ORM\Column(name="idmediopago", type="integer", nullable=true)
     */
    private $idmediopago;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal_id", type="string", length=50, nullable=true)
     */
    private $terminalId;

    /**
     * @var string
     *
     * @ORM\Column(name="term_seq_num", type="string", length=5, nullable=true)
     */
    private $termSeqNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainformado_ol", type="datetime", nullable=true)
     */
    private $fechainformadoOl;

    /**
     * @var integer
     *
     * @ORM\Column(name="anulado", type="smallint", nullable=true)
     */
    private $anulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpago", type="integer", nullable=true)
     */
    private $idpago;

    /**
     * @var string
     *
     * @ORM\Column(name="identidad", type="string", length=20, nullable=true)
     */
    private $identidad;



    /**
     * Get idcobrop
     *
     * @return integer 
     */
    public function getIdcobrop()
    {
        return $this->idcobrop;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return Cobrosparciales
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return integer 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Cobrosparciales
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Cobrosparciales
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
     * @return Cobrosparciales
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
     * Set idmediopago
     *
     * @param integer $idmediopago
     * @return Cobrosparciales
     */
    public function setIdmediopago($idmediopago)
    {
        $this->idmediopago = $idmediopago;

        return $this;
    }

    /**
     * Get idmediopago
     *
     * @return integer 
     */
    public function getIdmediopago()
    {
        return $this->idmediopago;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Cobrosparciales
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
     * Set terminalId
     *
     * @param string $terminalId
     * @return Cobrosparciales
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
     * @return Cobrosparciales
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
     * Set fechainformadoOl
     *
     * @param \DateTime $fechainformadoOl
     * @return Cobrosparciales
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
     * Set anulado
     *
     * @param integer $anulado
     * @return Cobrosparciales
     */
    public function setAnulado($anulado)
    {
        $this->anulado = $anulado;

        return $this;
    }

    /**
     * Get anulado
     *
     * @return integer 
     */
    public function getAnulado()
    {
        return $this->anulado;
    }

    /**
     * Set idpago
     *
     * @param integer $idpago
     * @return Cobrosparciales
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

    /**
     * Set identidad
     *
     * @param string $identidad
     * @return Cobrosparciales
     */
    public function setIdentidad($identidad)
    {
        $this->identidad = $identidad;

        return $this;
    }

    /**
     * Get identidad
     *
     * @return string 
     */
    public function getIdentidad()
    {
        return $this->identidad;
    }
}
