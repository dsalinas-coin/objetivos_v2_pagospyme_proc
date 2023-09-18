<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilTransferencias
 *
 * @ORM\Table(name="pagofacil_transferencias")
 * @ORM\Entity
 */
class PagofacilTransferencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtransferencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtransferencia_tipo", type="smallint", nullable=true)
     */
    private $idtransferenciaTipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;
    /**
     * @var string
     *
     * @ORM\Column(name="nroorden", type="string", length=20, nullable=true)
     */
    private $nroorden;

    /**
     * @var string
     *
     * @ORM\Column(name="mediopago", type="string", length=20, nullable=true)
     */
    private $mediopago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadeposito", type="datetime", nullable=true)
     */
    private $fechadeposito;

    /**
     * @var float
     *
     * @ORM\Column(name="montototal",type="decimal", precision=8, scale=2, nullable=true)
     */
    private $montototal;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_enviado", type="boolean", nullable=true)
     */
    private $emailEnviado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archivo_enviado", type="boolean", nullable=true)
     */
    private $archivoEnviado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="archivo_idreg", type="integer", nullable=true)
     */
    private $archivoIdreg;
    /**
     * @return integer
     */
    public function getArchivoIdreg()
    {
        return $this->archivoIdreg;
    }

    /**
     * @param integer $arc
     */
    public function setArchivoIdreg($arc)
    {
        $this->archivoIdreg = $arc;
    }


    /**
     * @return string
     */
    public function getNroorden()
    {
        return $this->nroorden;
    }

    /**
     * @param string $nroorden
     */
    public function setNroorden($nroorden)
    {
        $this->nroorden = $nroorden;
    }
    /**
     * @return string
     */
    public function getMediopago()
    {
        return $this->mediopago;
    }

    /**
     * @param string $mediopago
     */
    public function setMediopago($mediopago)
    {
        $this->mediopago = $mediopago;
    }


    /**
     * Get idtransferencia
     *
     * @return integer
     */
    public function getIdtransferencia()
    {
        return $this->idtransferencia;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return PagofacilTransferencias
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
     * Set idtransferenciaTipo
     *
     * @param integer $idtransferenciaTipo
     * @return PagofacilTransferencias
     */
    public function setIdtransferenciaTipo($idtransferenciaTipo)
    {
        $this->idtransferenciaTipo = $idtransferenciaTipo;

        return $this;
    }

    /**
     * Get idtransferenciaTipo
     *
     * @return integer
     */
    public function getIdtransferenciaTipo()
    {
        return $this->idtransferenciaTipo;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return PagofacilTransferencias
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
     * Set fechadeposito
     *
     * @param \DateTime $fechadeposito
     * @return PagofacilTransferencias
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
     * Set montototal
     *
     * @param float $montototal
     * @return PagofacilTransferencias
     */
    public function setMontototal($montototal)
    {
        $this->montototal = $montototal;

        return $this;
    }

    /**
     * Get montototal
     *
     * @return float
     */
    public function getMontototal()
    {
        return $this->montototal;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return PagofacilTransferencias
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
     * Set emailEnviado
     *
     * @param boolean $emailEnviado
     * @return PagofacilTransferencias
     */
    public function setEmailEnviado($emailEnviado)
    {
        $this->emailEnviado = $emailEnviado;

        return $this;
    }

    /**
     * Get emailEnviado
     *
     * @return boolean
     */
    public function getEmailEnviado()
    {
        return $this->emailEnviado;
    }
    /**
     * Set archivoEnviado
     *
     * @param boolean $archivoEnviado
     *
     * @return PagofacilTransferencias
     */
    public function setArchivoEnviado($archivoEnviado)
    {
        $this->archivoEnviado = $archivoEnviado;

        return $this;
    }

    /**
     * Get archivoEnviado
     *
     * @return boolean
     */
    public function getArchivoEnviado()
    {
        return $this->archivoEnviado;
    }

}
