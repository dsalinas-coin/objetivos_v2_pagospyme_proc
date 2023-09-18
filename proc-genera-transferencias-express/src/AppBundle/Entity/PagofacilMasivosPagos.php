<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilMasivosPagos
 *
 * @ORM\Table(name="pagofacil_masivos_pagos", indexes={@ORM\Index(name="idx_pagofacil_masivos_pagos_idcupon", columns={"idcupon"}), @ORM\Index(name="idx_pagofacil_masivos_pagos_fechaingreso", columns={"fechaingreso"}), @ORM\Index(name="idx_pagofacil_masivos_pagos_fechapago", columns={"fechapago"}), @ORM\Index(name="idx_pagofacil_masivos_pagos_fechacobro", columns={"fechacobro", "terminal_id"}), @ORM\Index(name="NonClusteredIndex-20130603-134835", columns={"emailenviado"}), @ORM\Index(name="NonClusteredIndex-20160803-184806", columns={"idmedio"}), @ORM\Index(name="idx_20170403", columns={"idcupon", "fechacobro", "idcobro_estado", "idmedio"})})
 * @ORM\Entity
 */
class PagofacilMasivosPagos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpago;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=false)
     */
    private $idcupon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=false)
     */
    private $fechapago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobro", type="datetime", nullable=false)
     */
    private $fechacobro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaprocesopf", type="datetime", nullable=true)
     */
    private $fechaprocesopf;

    /**
     * @var integer
     *
     * @ORM\Column(name="importepagado", type="integer", nullable=false)
     */
    private $importepagado;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal_id", type="string", length=50, nullable=false)
     */
    private $terminalId;

    /**
     * @var string
     *
     * @ORM\Column(name="term_seq_num", type="string", length=50, nullable=false)
     */
    private $termSeqNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

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
     * @ORM\Column(name="idmedio", type="integer", nullable=true)
     */
    private $idmedio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechareversa", type="datetime", nullable=true)
     */
    private $fechareversa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso_reversa", type="datetime", nullable=true)
     */
    private $fechaingresoReversa;



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
     * Set idcupon
     *
     * @param integer $idcupon
     * @return PagofacilMasivosPagos
     */
    public function setIdcupon($idcupon)
    {
        $this->idcupon = $idcupon;

        return $this;
    }

    /**
     * Get idcupon
     *
     * @return integer 
     */
    public function getIdcupon()
    {
        return $this->idcupon;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return PagofacilMasivosPagos
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
     * @return PagofacilMasivosPagos
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
     * Set fechacobro
     *
     * @param \DateTime $fechacobro
     * @return PagofacilMasivosPagos
     */
    public function setFechacobro($fechacobro)
    {
        $this->fechacobro = $fechacobro;

        return $this;
    }

    /**
     * Get fechacobro
     *
     * @return \DateTime 
     */
    public function getFechacobro()
    {
        return $this->fechacobro;
    }

    /**
     * Set fechaprocesopf
     *
     * @param \DateTime $fechaprocesopf
     * @return PagofacilMasivosPagos
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
     * Set importepagado
     *
     * @param integer $importepagado
     * @return PagofacilMasivosPagos
     */
    public function setImportepagado($importepagado)
    {
        $this->importepagado = $importepagado;

        return $this;
    }

    /**
     * Get importepagado
     *
     * @return integer 
     */
    public function getImportepagado()
    {
        return $this->importepagado;
    }

    /**
     * Set terminalId
     *
     * @param string $terminalId
     * @return PagofacilMasivosPagos
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
     * @return PagofacilMasivosPagos
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
     * Set estado
     *
     * @param integer $estado
     * @return PagofacilMasivosPagos
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

    /**
     * Set emailenviado
     *
     * @param integer $emailenviado
     * @return PagofacilMasivosPagos
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
     * @return PagofacilMasivosPagos
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
     * @return PagofacilMasivosPagos
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
     * @return PagofacilMasivosPagos
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
     * Set fechareversa
     *
     * @param \DateTime $fechareversa
     * @return PagofacilMasivosPagos
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
     * Set fechaingresoReversa
     *
     * @param \DateTime $fechaingresoReversa
     * @return PagofacilMasivosPagos
     */
    public function setFechaingresoReversa($fechaingresoReversa)
    {
        $this->fechaingresoReversa = $fechaingresoReversa;

        return $this;
    }

    /**
     * Get fechaingresoReversa
     *
     * @return \DateTime 
     */
    public function getFechaingresoReversa()
    {
        return $this->fechaingresoReversa;
    }
}
