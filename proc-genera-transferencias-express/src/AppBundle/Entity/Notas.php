<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas", indexes={@ORM\Index(name="idx_cliente", columns={"idcliente"}), @ORM\Index(name="idx_Fecha", columns={"fecha"}), @ORM\Index(name="idx_IdUsuario", columns={"idusuario"}), @ORM\Index(name="notas0", columns={"idoperador", "fecha"}), @ORM\Index(name="idnota_respuesta", columns={"idnota_respuesta"}), @ORM\Index(name="idcategoria", columns={"idcategoria"}), @ORM\Index(name="urgente_estado", columns={"urgente", "estado"}), @ORM\Index(name="_dta_index_notas_5_273436048__K2_K1_K7_K5_3_6", columns={"idoperador", "descrip", "idusuario", "idnota", "idcategoria", "fecha", "contactable", "idtiporeclamo", "idmotivomora"})})
 * @ORM\Entity
 */
class Notas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idnota", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnota;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="string", length=2000, nullable=false)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     */
    private $idcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgente", type="integer", nullable=false)
     */
    private $urgente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente_priv", type="integer", nullable=true)
     */
    private $idclientePriv;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="idnota_respuesta", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idnotaRespuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_apertura", type="datetime", nullable=true)
     */
    private $fechaApertura;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactable", type="smallint", nullable=true)
     */
    private $contactable;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtiporeclamo", type="smallint", nullable=true)
     */
    private $idtiporeclamo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmotivomora", type="smallint", nullable=true)
     */
    private $idmotivomora;



    /**
     * Get idnota
     *
     * @return string 
     */
    public function getIdnota()
    {
        return $this->idnota;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     * @return Notas
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return Notas
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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Notas
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Notas
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
     * Set descrip
     *
     * @param string $descrip
     * @return Notas
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     * @return Notas
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set urgente
     *
     * @param integer $urgente
     * @return Notas
     */
    public function setUrgente($urgente)
    {
        $this->urgente = $urgente;

        return $this;
    }

    /**
     * Get urgente
     *
     * @return integer 
     */
    public function getUrgente()
    {
        return $this->urgente;
    }

    /**
     * Set idclientePriv
     *
     * @param integer $idclientePriv
     * @return Notas
     */
    public function setIdclientePriv($idclientePriv)
    {
        $this->idclientePriv = $idclientePriv;

        return $this;
    }

    /**
     * Get idclientePriv
     *
     * @return integer 
     */
    public function getIdclientePriv()
    {
        return $this->idclientePriv;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Notas
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
     * @return Notas
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
     * Set idnotaRespuesta
     *
     * @param string $idnotaRespuesta
     * @return Notas
     */
    public function setIdnotaRespuesta($idnotaRespuesta)
    {
        $this->idnotaRespuesta = $idnotaRespuesta;

        return $this;
    }

    /**
     * Get idnotaRespuesta
     *
     * @return string 
     */
    public function getIdnotaRespuesta()
    {
        return $this->idnotaRespuesta;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return Notas
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime 
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set contactable
     *
     * @param integer $contactable
     * @return Notas
     */
    public function setContactable($contactable)
    {
        $this->contactable = $contactable;

        return $this;
    }

    /**
     * Get contactable
     *
     * @return integer 
     */
    public function getContactable()
    {
        return $this->contactable;
    }

    /**
     * Set idtiporeclamo
     *
     * @param integer $idtiporeclamo
     * @return Notas
     */
    public function setIdtiporeclamo($idtiporeclamo)
    {
        $this->idtiporeclamo = $idtiporeclamo;

        return $this;
    }

    /**
     * Get idtiporeclamo
     *
     * @return integer 
     */
    public function getIdtiporeclamo()
    {
        return $this->idtiporeclamo;
    }

    /**
     * Set idmotivomora
     *
     * @param integer $idmotivomora
     * @return Notas
     */
    public function setIdmotivomora($idmotivomora)
    {
        $this->idmotivomora = $idmotivomora;

        return $this;
    }

    /**
     * Get idmotivomora
     *
     * @return integer 
     */
    public function getIdmotivomora()
    {
        return $this->idmotivomora;
    }
}
