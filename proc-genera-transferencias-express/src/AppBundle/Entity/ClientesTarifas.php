<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesTarifas
 *
 * @ORM\Table(name="clientes_tarifas", indexes={@ORM\Index(name="IX_clientes_tarifas", columns={"idcliente"}), @ORM\Index(name="IX_clientes_tarifas_1", columns={"idconcepto"})})
 * @ORM\Entity
 */
class ClientesTarifas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtarifa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idconcepto", type="integer", nullable=false)
     */
    private $idconcepto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultimamodificacion", type="datetime", nullable=true)
     */
    private $ultimamodificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="integer", nullable=false)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=50, nullable=true)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="datetime", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fechavencimiento", type="string", length=10, nullable=true)
     */
    private $fechavencimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="valorpordefecto", type="integer", nullable=true)
     */
    private $valorpordefecto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaperiododesde", type="datetime", nullable=true)
     */
    private $fechaperiododesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaperiodohasta", type="datetime", nullable=true)
     */
    private $fechaperiodohasta;



    /**
     * Get idtarifa
     *
     * @return integer 
     */
    public function getIdtarifa()
    {
        return $this->idtarifa;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ClientesTarifas
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
     * Set idconcepto
     *
     * @param integer $idconcepto
     * @return ClientesTarifas
     */
    public function setIdconcepto($idconcepto)
    {
        $this->idconcepto = $idconcepto;

        return $this;
    }

    /**
     * Get idconcepto
     *
     * @return integer 
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set ultimamodificacion
     *
     * @param \DateTime $ultimamodificacion
     * @return ClientesTarifas
     */
    public function setUltimamodificacion($ultimamodificacion)
    {
        $this->ultimamodificacion = $ultimamodificacion;

        return $this;
    }

    /**
     * Get ultimamodificacion
     *
     * @return \DateTime 
     */
    public function getUltimamodificacion()
    {
        return $this->ultimamodificacion;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return ClientesTarifas
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ClientesTarifas
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
     * Set comentario
     *
     * @param string $comentario
     * @return ClientesTarifas
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     * @return ClientesTarifas
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime 
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set fechavencimiento
     *
     * @param string $fechavencimiento
     * @return ClientesTarifas
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return string 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set valorpordefecto
     *
     * @param integer $valorpordefecto
     * @return ClientesTarifas
     */
    public function setValorpordefecto($valorpordefecto)
    {
        $this->valorpordefecto = $valorpordefecto;

        return $this;
    }

    /**
     * Get valorpordefecto
     *
     * @return integer 
     */
    public function getValorpordefecto()
    {
        return $this->valorpordefecto;
    }

    /**
     * Set fechaperiododesde
     *
     * @param \DateTime $fechaperiododesde
     * @return ClientesTarifas
     */
    public function setFechaperiododesde($fechaperiododesde)
    {
        $this->fechaperiododesde = $fechaperiododesde;

        return $this;
    }

    /**
     * Get fechaperiododesde
     *
     * @return \DateTime 
     */
    public function getFechaperiododesde()
    {
        return $this->fechaperiododesde;
    }

    /**
     * Set fechaperiodohasta
     *
     * @param \DateTime $fechaperiodohasta
     * @return ClientesTarifas
     */
    public function setFechaperiodohasta($fechaperiodohasta)
    {
        $this->fechaperiodohasta = $fechaperiodohasta;

        return $this;
    }

    /**
     * Get fechaperiodohasta
     *
     * @return \DateTime 
     */
    public function getFechaperiodohasta()
    {
        return $this->fechaperiodohasta;
    }
}
