<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cobros
 *
 * @ORM\Table(name="cobros", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__Pagos__145C0A3F", columns={"idfactura"})}, indexes={@ORM\Index(name="idx_estado", columns={"estado"}), @ORM\Index(name="idx_fechacobro", columns={"fechacobro"}), @ORM\Index(name="idx_idformapago", columns={"idformapago"})})
 * @ORM\Entity
 */
class Cobros
{
    /**
     * @var string
     *
     * @ORM\Column(name="idcobro", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=false)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idformapago", type="integer", nullable=false)
     */
    private $idformapago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="datetime", nullable=false)
     */
    private $fechaalta;

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
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeretencion", type="integer", nullable=true)
     */
    private $importeretencion;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=100, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=30, nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="idliquidacion", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idliquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocheque", type="string", length=40, nullable=true)
     */
    private $nrocheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="importecheque", type="integer", nullable=true)
     */
    private $importecheque;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=40, nullable=true)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursal", type="string", length=40, nullable=true)
     */
    private $sucursal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaemision", type="datetime", nullable=true)
     */
    private $fechaemision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadeposito", type="datetime", nullable=true)
     */
    private $fechadeposito;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100, nullable=true)
     */
    private $localidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlocalidad", type="integer", nullable=true)
     */
    private $idlocalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpartido", type="integer", nullable=true)
     */
    private $idpartido;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrador", type="integer", nullable=true)
     */
    private $idcobrador;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=1000, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



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
     * Set idfactura
     *
     * @param integer $idfactura
     * @return Cobros
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
     * Set idformapago
     *
     * @param integer $idformapago
     * @return Cobros
     */
    public function setIdformapago($idformapago)
    {
        $this->idformapago = $idformapago;

        return $this;
    }

    /**
     * Get idformapago
     *
     * @return integer 
     */
    public function getIdformapago()
    {
        return $this->idformapago;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return Cobros
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime 
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return Cobros
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
     * @return Cobros
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
     * Set importe
     *
     * @param integer $importe
     * @return Cobros
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
     * Set importeretencion
     *
     * @param integer $importeretencion
     * @return Cobros
     */
    public function setImporteretencion($importeretencion)
    {
        $this->importeretencion = $importeretencion;

        return $this;
    }

    /**
     * Get importeretencion
     *
     * @return integer 
     */
    public function getImporteretencion()
    {
        return $this->importeretencion;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Cobros
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set hora
     *
     * @param string $hora
     * @return Cobros
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set idliquidacion
     *
     * @param string $idliquidacion
     * @return Cobros
     */
    public function setIdliquidacion($idliquidacion)
    {
        $this->idliquidacion = $idliquidacion;

        return $this;
    }

    /**
     * Get idliquidacion
     *
     * @return string 
     */
    public function getIdliquidacion()
    {
        return $this->idliquidacion;
    }

    /**
     * Set nrocheque
     *
     * @param string $nrocheque
     * @return Cobros
     */
    public function setNrocheque($nrocheque)
    {
        $this->nrocheque = $nrocheque;

        return $this;
    }

    /**
     * Get nrocheque
     *
     * @return string 
     */
    public function getNrocheque()
    {
        return $this->nrocheque;
    }

    /**
     * Set importecheque
     *
     * @param integer $importecheque
     * @return Cobros
     */
    public function setImportecheque($importecheque)
    {
        $this->importecheque = $importecheque;

        return $this;
    }

    /**
     * Get importecheque
     *
     * @return integer 
     */
    public function getImportecheque()
    {
        return $this->importecheque;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return Cobros
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set sucursal
     *
     * @param string $sucursal
     * @return Cobros
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Cobros
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime 
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set fechadeposito
     *
     * @param \DateTime $fechadeposito
     * @return Cobros
     */
    public function setFechadeposito($fechadeposito)
    {
        $this->fechadeposito = $fechadeposito;

        return $this;
    }

    /**
     * Get fechadeposito
     *
     * @return \DateTime 
     */
    public function getFechadeposito()
    {
        return $this->fechadeposito;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cobros
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Cobros
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set idlocalidad
     *
     * @param integer $idlocalidad
     * @return Cobros
     */
    public function setIdlocalidad($idlocalidad)
    {
        $this->idlocalidad = $idlocalidad;

        return $this;
    }

    /**
     * Get idlocalidad
     *
     * @return integer 
     */
    public function getIdlocalidad()
    {
        return $this->idlocalidad;
    }

    /**
     * Set idpartido
     *
     * @param integer $idpartido
     * @return Cobros
     */
    public function setIdpartido($idpartido)
    {
        $this->idpartido = $idpartido;

        return $this;
    }

    /**
     * Get idpartido
     *
     * @return integer 
     */
    public function getIdpartido()
    {
        return $this->idpartido;
    }

    /**
     * Set idcobrador
     *
     * @param integer $idcobrador
     * @return Cobros
     */
    public function setIdcobrador($idcobrador)
    {
        $this->idcobrador = $idcobrador;

        return $this;
    }

    /**
     * Get idcobrador
     *
     * @return integer 
     */
    public function getIdcobrador()
    {
        return $this->idcobrador;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Cobros
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Cobros
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Cobros
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
