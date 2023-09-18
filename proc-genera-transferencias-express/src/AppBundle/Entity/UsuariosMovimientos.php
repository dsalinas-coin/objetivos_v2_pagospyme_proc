<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosMovimientos
 *
 * @ORM\Table(name="usuarios_movimientos", indexes={@ORM\Index(name="idservicio", columns={"idservicio"}), @ORM\Index(name="idmovimiento_tipo", columns={"idmovimiento_tipo"}), @ORM\Index(name="idmovimiento_subtipo", columns={"idmovimiento_subtipo"}), @ORM\Index(name="idasoc", columns={"idasoc"}), @ORM\Index(name="idx_usuariosmovimientos_importesaldo", columns={"importe", "saldo"}), @ORM\Index(name="idx_usuarios_movimientos_subtipo_idasoc", columns={"idmovimiento_tipo", "idmovimiento_subtipo", "idasoc"})})
 * @ORM\Entity
 */
class UsuariosMovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=false)
     */
    private $idservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento_tipo", type="smallint", nullable=false)
     */
    private $idmovimientoTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmovimiento_subtipo", type="smallint", nullable=true)
     */
    private $idmovimientoSubtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=true)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idasoc", type="integer", nullable=true)
     */
    private $idasoc;



    /**
     * Get idmovimiento
     *
     * @return integer 
     */
    public function getIdmovimiento()
    {
        return $this->idmovimiento;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return UsuariosMovimientos
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return UsuariosMovimientos
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
     * Set idmovimientoTipo
     *
     * @param integer $idmovimientoTipo
     * @return UsuariosMovimientos
     */
    public function setIdmovimientoTipo($idmovimientoTipo)
    {
        $this->idmovimientoTipo = $idmovimientoTipo;

        return $this;
    }

    /**
     * Get idmovimientoTipo
     *
     * @return integer 
     */
    public function getIdmovimientoTipo()
    {
        return $this->idmovimientoTipo;
    }

    /**
     * Set idmovimientoSubtipo
     *
     * @param integer $idmovimientoSubtipo
     * @return UsuariosMovimientos
     */
    public function setIdmovimientoSubtipo($idmovimientoSubtipo)
    {
        $this->idmovimientoSubtipo = $idmovimientoSubtipo;

        return $this;
    }

    /**
     * Get idmovimientoSubtipo
     *
     * @return integer 
     */
    public function getIdmovimientoSubtipo()
    {
        return $this->idmovimientoSubtipo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return UsuariosMovimientos
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
     * Set importe
     *
     * @param integer $importe
     * @return UsuariosMovimientos
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
     * Set saldo
     *
     * @param integer $saldo
     * @return UsuariosMovimientos
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set idasoc
     *
     * @param integer $idasoc
     * @return UsuariosMovimientos
     */
    public function setIdasoc($idasoc)
    {
        $this->idasoc = $idasoc;

        return $this;
    }

    /**
     * Get idasoc
     *
     * @return integer 
     */
    public function getIdasoc()
    {
        return $this->idasoc;
    }
}
