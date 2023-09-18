<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosFail
 *
 * @ORM\Table(name="cobros_fail", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__cobros_fail2__2334397B", columns={"idcobro"})})
 * @ORM\Entity
 */
class CobrosFail
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechafail", type="datetime", nullable=false)
     */
    private $fechafail;

    /**
     * @var string
     *
     * @ORM\Column(name="idoperador", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idoperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrazon", type="integer", nullable=false)
     */
    private $idrazon;

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
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=100, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlocalidad", type="integer", nullable=true)
     */
    private $idlocalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpartido", type="integer", nullable=false)
     */
    private $idpartido;

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
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

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
     * @return CobrosFail
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
     * Set fechafail
     *
     * @param \DateTime $fechafail
     * @return CobrosFail
     */
    public function setFechafail($fechafail)
    {
        $this->fechafail = $fechafail;

        return $this;
    }

    /**
     * Get fechafail
     *
     * @return \DateTime 
     */
    public function getFechafail()
    {
        return $this->fechafail;
    }

    /**
     * Set idoperador
     *
     * @param string $idoperador
     * @return CobrosFail
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return string 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set idrazon
     *
     * @param integer $idrazon
     * @return CobrosFail
     */
    public function setIdrazon($idrazon)
    {
        $this->idrazon = $idrazon;

        return $this;
    }

    /**
     * Get idrazon
     *
     * @return integer 
     */
    public function getIdrazon()
    {
        return $this->idrazon;
    }

    /**
     * Set idformapago
     *
     * @param integer $idformapago
     * @return CobrosFail
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
     * @return CobrosFail
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
     * @return CobrosFail
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
     * Set contacto
     *
     * @param string $contacto
     * @return CobrosFail
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
     * Set direccion
     *
     * @param string $direccion
     * @return CobrosFail
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
     * Set idlocalidad
     *
     * @param integer $idlocalidad
     * @return CobrosFail
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
     * @return CobrosFail
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
     * Set hora
     *
     * @param string $hora
     * @return CobrosFail
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
     * @return CobrosFail
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
     * @return CobrosFail
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
     * Set banco
     *
     * @param string $banco
     * @return CobrosFail
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
     * @return CobrosFail
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
     * @return CobrosFail
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
     * @return CobrosFail
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
     * Set tipo
     *
     * @param integer $tipo
     * @return CobrosFail
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return CobrosFail
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
     * @return CobrosFail
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
