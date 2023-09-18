<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilMasivos
 *
 * @ORM\Table(name="pagofacil_masivos", indexes={@ORM\Index(name="idx_pagofacil_masivos_idcliente", columns={"idcliente"}), @ORM\Index(name="_dta_index_pagofacil_masivos_5_653297437__K6_K16_K7", columns={"idcliente", "estado", "idservicio"}), @ORM\Index(name="NonClusteredIndex-20121226-135830", columns={"codoperacion_manual"}), @ORM\Index(name="idx_idcliente_estado", columns={"idcupon", "fechaenvio", "fechavto", "idservicio", "codigo", "activo", "idtipogeneracion", "idcliente", "estado"}), @ORM\Index(name="NonClusteredIndex-20130729-121400", columns={"idtipogeneracion"}), @ORM\Index(name="idx_pagofacil_masivos_nrooperacion", columns={"idcliente", "nrooperacion"}), @ORM\Index(name="<Name of Missing Index, sysname,>", columns={"idcupon", "fechaenvio", "fechavto"}), @ORM\Index(name="idx_pagofacil_masivos_codoperacion_manual", columns={"codoperacion_manual"}), @ORM\Index(name="_dta_index_pagofacil_masivos_5_653297437__K16_K7_K15_K1_K3_11_14_17_22", columns={"nrooperacion", "importe", "observaciones", "codoperacion_manual", "estado", "idservicio", "activo", "idcupon", "fechavto"}), @ORM\Index(name="_dta_index_pagofacil_masivos_5_653297437__K6_K16_K32_K1_K18_K7_2_3_4_10_14_15", columns={"fechaenvio", "fechavto", "fechapago", "codigo", "importe", "activo", "idcliente", "estado", "en_cuponera", "idcupon", "idtipogeneracion", "idservicio"}), @ORM\Index(name="idx_pagofacil_masivos_codigo", columns={"codigo"}), @ORM\Index(name="idx_pagofacil_masivos__idservicio", columns={"idservicio"})})
 * @ORM\Entity
 */
class PagofacilMasivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcupon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenvio", type="datetime", nullable=true)
     */
    private $fechaenvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavto", type="datetime", nullable=true)
     */
    private $fechavto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobro", type="datetime", nullable=true)
     */
    private $fechacobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=50, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrooperacion", type="integer", nullable=true)
     */
    private $nrooperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="cupon", type="string", length=0, nullable=true)
     */
    private $cupon;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmoneda", type="smallint", nullable=true)
     */
    private $idmoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", length=-1, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipogeneracion", type="smallint", nullable=true)
     */
    private $idtipogeneracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavto2", type="datetime", nullable=true)
     */
    private $fechavto2;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe2", type="integer", nullable=true)
     */
    private $importe2;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_cliente", type="string", length=50, nullable=true)
     */
    private $codigoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="codoperacion_manual", type="string", length=50, nullable=true)
     */
    private $codoperacionManual;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal_id", type="string", length=6, nullable=true)
     */
    private $terminalId;

    /**
     * @var string
     *
     * @ORM\Column(name="term_seq_num", type="string", length=4, nullable=true)
     */
    private $termSeqNum;

    /**
     * @var string
     *
     * @ORM\Column(name="cuponhtml", type="text", length=-1, nullable=true)
     */
    private $cuponhtml;

    /**
     * @var integer
     *
     * @ORM\Column(name="importepagado", type="integer", nullable=true)
     */
    private $importepagado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaprocesopf", type="datetime", nullable=true)
     */
    private $fechaprocesopf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadesactivacion", type="datetime", nullable=true)
     */
    private $fechadesactivacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_internas", type="string", length=255, nullable=true)
     */
    private $observacionesInternas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="en_cuponera", type="boolean", nullable=true)
     */
    private $enCuponera;



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
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return PagofacilMasivos
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
     * Set fechavto
     *
     * @param \DateTime $fechavto
     * @return PagofacilMasivos
     */
    public function setFechavto($fechavto)
    {
        $this->fechavto = $fechavto;

        return $this;
    }

    /**
     * Get fechavto
     *
     * @return \DateTime 
     */
    public function getFechavto()
    {
        return $this->fechavto;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return PagofacilMasivos
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
     * @return PagofacilMasivos
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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return PagofacilMasivos
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return PagofacilMasivos
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
     * Set idoperador
     *
     * @param integer $idoperador
     * @return PagofacilMasivos
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return PagofacilMasivos
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return PagofacilMasivos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nrooperacion
     *
     * @param integer $nrooperacion
     * @return PagofacilMasivos
     */
    public function setNrooperacion($nrooperacion)
    {
        $this->nrooperacion = $nrooperacion;

        return $this;
    }

    /**
     * Get nrooperacion
     *
     * @return integer 
     */
    public function getNrooperacion()
    {
        return $this->nrooperacion;
    }

    /**
     * Set cupon
     *
     * @param string $cupon
     * @return PagofacilMasivos
     */
    public function setCupon($cupon)
    {
        $this->cupon = $cupon;

        return $this;
    }

    /**
     * Get cupon
     *
     * @return string 
     */
    public function getCupon()
    {
        return $this->cupon;
    }

    /**
     * Set idmoneda
     *
     * @param integer $idmoneda
     * @return PagofacilMasivos
     */
    public function setIdmoneda($idmoneda)
    {
        $this->idmoneda = $idmoneda;

        return $this;
    }

    /**
     * Get idmoneda
     *
     * @return integer 
     */
    public function getIdmoneda()
    {
        return $this->idmoneda;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return PagofacilMasivos
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
     * Set activo
     *
     * @param integer $activo
     * @return PagofacilMasivos
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
     * Set estado
     *
     * @param integer $estado
     * @return PagofacilMasivos
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return PagofacilMasivos
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
     * Set idtipogeneracion
     *
     * @param integer $idtipogeneracion
     * @return PagofacilMasivos
     */
    public function setIdtipogeneracion($idtipogeneracion)
    {
        $this->idtipogeneracion = $idtipogeneracion;

        return $this;
    }

    /**
     * Get idtipogeneracion
     *
     * @return integer 
     */
    public function getIdtipogeneracion()
    {
        return $this->idtipogeneracion;
    }

    /**
     * Set fechavto2
     *
     * @param \DateTime $fechavto2
     * @return PagofacilMasivos
     */
    public function setFechavto2($fechavto2)
    {
        $this->fechavto2 = $fechavto2;

        return $this;
    }

    /**
     * Get fechavto2
     *
     * @return \DateTime 
     */
    public function getFechavto2()
    {
        return $this->fechavto2;
    }

    /**
     * Set importe2
     *
     * @param integer $importe2
     * @return PagofacilMasivos
     */
    public function setImporte2($importe2)
    {
        $this->importe2 = $importe2;

        return $this;
    }

    /**
     * Get importe2
     *
     * @return integer 
     */
    public function getImporte2()
    {
        return $this->importe2;
    }

    /**
     * Set codigoCliente
     *
     * @param string $codigoCliente
     * @return PagofacilMasivos
     */
    public function setCodigoCliente($codigoCliente)
    {
        $this->codigoCliente = $codigoCliente;

        return $this;
    }

    /**
     * Get codigoCliente
     *
     * @return string 
     */
    public function getCodigoCliente()
    {
        return $this->codigoCliente;
    }

    /**
     * Set codoperacionManual
     *
     * @param string $codoperacionManual
     * @return PagofacilMasivos
     */
    public function setCodoperacionManual($codoperacionManual)
    {
        $this->codoperacionManual = $codoperacionManual;

        return $this;
    }

    /**
     * Get codoperacionManual
     *
     * @return string 
     */
    public function getCodoperacionManual()
    {
        return $this->codoperacionManual;
    }

    /**
     * Set terminalId
     *
     * @param string $terminalId
     * @return PagofacilMasivos
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
     * @return PagofacilMasivos
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
     * Set cuponhtml
     *
     * @param string $cuponhtml
     * @return PagofacilMasivos
     */
    public function setCuponhtml($cuponhtml)
    {
        $this->cuponhtml = $cuponhtml;

        return $this;
    }

    /**
     * Get cuponhtml
     *
     * @return string 
     */
    public function getCuponhtml()
    {
        return $this->cuponhtml;
    }

    /**
     * Set importepagado
     *
     * @param integer $importepagado
     * @return PagofacilMasivos
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
     * Set fechaprocesopf
     *
     * @param \DateTime $fechaprocesopf
     * @return PagofacilMasivos
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
     * Set fechadesactivacion
     *
     * @param \DateTime $fechadesactivacion
     * @return PagofacilMasivos
     */
    public function setFechadesactivacion($fechadesactivacion)
    {
        $this->fechadesactivacion = $fechadesactivacion;

        return $this;
    }

    /**
     * Get fechadesactivacion
     *
     * @return \DateTime 
     */
    public function getFechadesactivacion()
    {
        return $this->fechadesactivacion;
    }

    /**
     * Set observacionesInternas
     *
     * @param string $observacionesInternas
     * @return PagofacilMasivos
     */
    public function setObservacionesInternas($observacionesInternas)
    {
        $this->observacionesInternas = $observacionesInternas;

        return $this;
    }

    /**
     * Get observacionesInternas
     *
     * @return string 
     */
    public function getObservacionesInternas()
    {
        return $this->observacionesInternas;
    }

    /**
     * Set enCuponera
     *
     * @param boolean $enCuponera
     * @return PagofacilMasivos
     */
    public function setEnCuponera($enCuponera)
    {
        $this->enCuponera = $enCuponera;

        return $this;
    }

    /**
     * Get enCuponera
     *
     * @return boolean 
     */
    public function getEnCuponera()
    {
        return $this->enCuponera;
    }
}
