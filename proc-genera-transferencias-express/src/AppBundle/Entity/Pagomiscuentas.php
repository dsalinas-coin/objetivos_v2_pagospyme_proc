<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagomiscuentas
 *
 * @ORM\Table(name="pagomiscuentas")
 * @ORM\Entity
 */
class Pagomiscuentas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpmc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpmc;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="string", length=10, nullable=true)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmoneda", type="smallint", nullable=true)
     */
    private $idmoneda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavto", type="datetime", nullable=true)
     */
    private $fechavto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavto2", type="datetime", nullable=true)
     */
    private $fechavto2;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe2", type="integer", nullable=true)
     */
    private $importe2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobro", type="datetime", nullable=true)
     */
    private $fechacobro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var integer
     *
     * @ORM\Column(name="importepagado", type="integer", nullable=true)
     */
    private $importepagado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="idcodigomovimiento", type="boolean", nullable=true)
     */
    private $idcodigomovimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaacreditacion", type="datetime", nullable=true)
     */
    private $fechaacreditacion;

    /**
     * @var string
     *
     * @ORM\Column(name="canalpago", type="string", length=2, nullable=true)
     */
    private $canalpago;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrocontrol", type="smallint", nullable=true)
     */
    private $nrocontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="mensajeticket", type="string", length=40, nullable=true)
     */
    private $mensajeticket;

    /**
     * @var string
     *
     * @ORM\Column(name="mensajepantalla", type="string", length=15, nullable=true)
     */
    private $mensajepantalla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enviado", type="boolean", nullable=true)
     */
    private $enviado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pagado", type="boolean", nullable=true)
     */
    private $pagado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenviopmc", type="datetime", nullable=true)
     */
    private $fechaenviopmc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadesactivacion", type="datetime", nullable=true)
     */
    private $fechadesactivacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_cliente", type="string", length=20, nullable=true)
     */
    private $codigoCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="emailcobroenviado", type="integer", nullable=true)
     */
    private $emailcobroenviado;



    /**
     * Get idpmc
     *
     * @return integer 
     */
    public function getIdpmc()
    {
        return $this->idpmc;
    }

    /**
     * Set idfactura
     *
     * @param string $idfactura
     * @return Pagomiscuentas
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
     * Set idmoneda
     *
     * @param integer $idmoneda
     * @return Pagomiscuentas
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Pagomiscuentas
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
     * Set fechavto
     *
     * @param \DateTime $fechavto
     * @return Pagomiscuentas
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
     * Set fechavto2
     *
     * @param \DateTime $fechavto2
     * @return Pagomiscuentas
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
     * Set importe
     *
     * @param integer $importe
     * @return Pagomiscuentas
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
     * Set importe2
     *
     * @param integer $importe2
     * @return Pagomiscuentas
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
     * Set fechacobro
     *
     * @param \DateTime $fechacobro
     * @return Pagomiscuentas
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
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return Pagomiscuentas
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
     * Set importepagado
     *
     * @param integer $importepagado
     * @return Pagomiscuentas
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
     * Set idcodigomovimiento
     *
     * @param boolean $idcodigomovimiento
     * @return Pagomiscuentas
     */
    public function setIdcodigomovimiento($idcodigomovimiento)
    {
        $this->idcodigomovimiento = $idcodigomovimiento;

        return $this;
    }

    /**
     * Get idcodigomovimiento
     *
     * @return boolean 
     */
    public function getIdcodigomovimiento()
    {
        return $this->idcodigomovimiento;
    }

    /**
     * Set fechaacreditacion
     *
     * @param \DateTime $fechaacreditacion
     * @return Pagomiscuentas
     */
    public function setFechaacreditacion($fechaacreditacion)
    {
        $this->fechaacreditacion = $fechaacreditacion;

        return $this;
    }

    /**
     * Get fechaacreditacion
     *
     * @return \DateTime 
     */
    public function getFechaacreditacion()
    {
        return $this->fechaacreditacion;
    }

    /**
     * Set canalpago
     *
     * @param string $canalpago
     * @return Pagomiscuentas
     */
    public function setCanalpago($canalpago)
    {
        $this->canalpago = $canalpago;

        return $this;
    }

    /**
     * Get canalpago
     *
     * @return string 
     */
    public function getCanalpago()
    {
        return $this->canalpago;
    }

    /**
     * Set nrocontrol
     *
     * @param integer $nrocontrol
     * @return Pagomiscuentas
     */
    public function setNrocontrol($nrocontrol)
    {
        $this->nrocontrol = $nrocontrol;

        return $this;
    }

    /**
     * Get nrocontrol
     *
     * @return integer 
     */
    public function getNrocontrol()
    {
        return $this->nrocontrol;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Pagomiscuentas
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
     * Set mensajeticket
     *
     * @param string $mensajeticket
     * @return Pagomiscuentas
     */
    public function setMensajeticket($mensajeticket)
    {
        $this->mensajeticket = $mensajeticket;

        return $this;
    }

    /**
     * Get mensajeticket
     *
     * @return string 
     */
    public function getMensajeticket()
    {
        return $this->mensajeticket;
    }

    /**
     * Set mensajepantalla
     *
     * @param string $mensajepantalla
     * @return Pagomiscuentas
     */
    public function setMensajepantalla($mensajepantalla)
    {
        $this->mensajepantalla = $mensajepantalla;

        return $this;
    }

    /**
     * Get mensajepantalla
     *
     * @return string 
     */
    public function getMensajepantalla()
    {
        return $this->mensajepantalla;
    }

    /**
     * Set enviado
     *
     * @param boolean $enviado
     * @return Pagomiscuentas
     */
    public function setEnviado($enviado)
    {
        $this->enviado = $enviado;

        return $this;
    }

    /**
     * Get enviado
     *
     * @return boolean 
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Set pagado
     *
     * @param boolean $pagado
     * @return Pagomiscuentas
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return boolean 
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Pagomiscuentas
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaenviopmc
     *
     * @param \DateTime $fechaenviopmc
     * @return Pagomiscuentas
     */
    public function setFechaenviopmc($fechaenviopmc)
    {
        $this->fechaenviopmc = $fechaenviopmc;

        return $this;
    }

    /**
     * Get fechaenviopmc
     *
     * @return \DateTime 
     */
    public function getFechaenviopmc()
    {
        return $this->fechaenviopmc;
    }

    /**
     * Set fechadesactivacion
     *
     * @param \DateTime $fechadesactivacion
     * @return Pagomiscuentas
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
     * Set codigoCliente
     *
     * @param string $codigoCliente
     * @return Pagomiscuentas
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
     * Set emailcobroenviado
     *
     * @param integer $emailcobroenviado
     * @return Pagomiscuentas
     */
    public function setEmailcobroenviado($emailcobroenviado)
    {
        $this->emailcobroenviado = $emailcobroenviado;

        return $this;
    }

    /**
     * Get emailcobroenviado
     *
     * @return integer 
     */
    public function getEmailcobroenviado()
    {
        return $this->emailcobroenviado;
    }
}
