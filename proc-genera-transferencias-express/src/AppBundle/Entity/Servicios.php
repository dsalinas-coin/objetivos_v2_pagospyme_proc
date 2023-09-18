<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", indexes={@ORM\Index(name="idx_idcliente", columns={"idcliente"}), @ORM\Index(name="idx_IDUsuario", columns={"idusuario"}), @ORM\Index(name="idx_numcliente", columns={"numcliente"}), @ORM\Index(name="idx_servicios_estado", columns={"estado"}), @ORM\Index(name="_dta_index_servicios_5_827202047__K8_K1_K3", columns={"estado", "idservicio", "idcliente"}), @ORM\Index(name="idx_servicios_datoadic3", columns={"datoadic3", "idservicio"}), @ORM\Index(name="_dta_index_servicios_5_827202047__K4_K3", columns={"numcliente", "idcliente"}), @ORM\Index(name="_dta_index_servicios_5_827202047__K4_K3_K8_K1", columns={"numcliente", "idcliente", "estado", "idservicio"}), @ORM\Index(name="_dta_index_servicios_5_827202047__K1_K3_K2_4", columns={"numcliente", "idservicio", "idcliente", "idusuario"}), @ORM\Index(name="idx_servicios_idcliente_estado", columns={"idservicio", "idusuario", "idcliente", "estado"}), @ORM\Index(name="_dta_index_servicios_5_1236251509__K1_K8_K3_K2_4", columns={"numcliente", "idservicio", "estado", "idcliente", "idusuario"})})
 * @ORM\Entity
 */
class Servicios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="numcliente", type="string", length=60, nullable=true)
     */
    private $numcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=200, nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

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
     * @ORM\Column(name="CGP", type="string", length=50, nullable=true)
     */
    private $cgp;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=50, nullable=true)
     */
    private $referencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldoactual", type="integer", nullable=false)
     */
    private $saldoactual;

    /**
     * @var integer
     *
     * @ORM\Column(name="idgrupo", type="smallint", nullable=true)
     */
    private $idgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="condventa", type="string", length=50, nullable=true)
     */
    private $condventa;

    /**
     * @var string
     *
     * @ORM\Column(name="datoadic1", type="string", length=400, nullable=true)
     */
    private $datoadic1;

    /**
     * @var string
     *
     * @ORM\Column(name="datoadic2", type="string", length=200, nullable=true)
     */
    private $datoadic2;

    /**
     * @var string
     *
     * @ORM\Column(name="codcredencialpf", type="string", length=50, nullable=true)
     */
    private $codcredencialpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="datoadic3", type="integer", nullable=true)
     */
    private $datoadic3;



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
     * Set idusuario
     *
     * @param integer $idusuario
     * @return Servicios
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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Servicios
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
     * Set numcliente
     *
     * @param string $numcliente
     * @return Servicios
     */
    public function setNumcliente($numcliente)
    {
        $this->numcliente = $numcliente;

        return $this;
    }

    /**
     * Get numcliente
     *
     * @return string 
     */
    public function getNumcliente()
    {
        return $this->numcliente;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Servicios
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Servicios
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Servicios
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
     * @return Servicios
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
     * Set cgp
     *
     * @param string $cgp
     * @return Servicios
     */
    public function setCgp($cgp)
    {
        $this->cgp = $cgp;

        return $this;
    }

    /**
     * Get cgp
     *
     * @return string 
     */
    public function getCgp()
    {
        return $this->cgp;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Servicios
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set saldoactual
     *
     * @param integer $saldoactual
     * @return Servicios
     */
    public function setSaldoactual($saldoactual)
    {
        $this->saldoactual = $saldoactual;

        return $this;
    }

    /**
     * Get saldoactual
     *
     * @return integer 
     */
    public function getSaldoactual()
    {
        return $this->saldoactual;
    }

    /**
     * Set idgrupo
     *
     * @param integer $idgrupo
     * @return Servicios
     */
    public function setIdgrupo($idgrupo)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return integer 
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }

    /**
     * Set condventa
     *
     * @param string $condventa
     * @return Servicios
     */
    public function setCondventa($condventa)
    {
        $this->condventa = $condventa;

        return $this;
    }

    /**
     * Get condventa
     *
     * @return string 
     */
    public function getCondventa()
    {
        return $this->condventa;
    }

    /**
     * Set datoadic1
     *
     * @param string $datoadic1
     * @return Servicios
     */
    public function setDatoadic1($datoadic1)
    {
        $this->datoadic1 = $datoadic1;

        return $this;
    }

    /**
     * Get datoadic1
     *
     * @return string 
     */
    public function getDatoadic1()
    {
        return $this->datoadic1;
    }

    /**
     * Set datoadic2
     *
     * @param string $datoadic2
     * @return Servicios
     */
    public function setDatoadic2($datoadic2)
    {
        $this->datoadic2 = $datoadic2;

        return $this;
    }

    /**
     * Get datoadic2
     *
     * @return string 
     */
    public function getDatoadic2()
    {
        return $this->datoadic2;
    }

    /**
     * Set codcredencialpf
     *
     * @param string $codcredencialpf
     * @return Servicios
     */
    public function setCodcredencialpf($codcredencialpf)
    {
        $this->codcredencialpf = $codcredencialpf;

        return $this;
    }

    /**
     * Get codcredencialpf
     *
     * @return string 
     */
    public function getCodcredencialpf()
    {
        return $this->codcredencialpf;
    }

    /**
     * Set datoadic3
     *
     * @param integer $datoadic3
     * @return Servicios
     */
    public function setDatoadic3($datoadic3)
    {
        $this->datoadic3 = $datoadic3;

        return $this;
    }

    /**
     * Get datoadic3
     *
     * @return integer 
     */
    public function getDatoadic3()
    {
        return $this->datoadic3;
    }
}
