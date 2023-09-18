<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controlprocesos
 *
 * @ORM\Table(name="controlprocesos")
 * @ORM\Entity
 */
class Controlprocesos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrol;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="smallint", nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="idtipoarchivo", type="string", length=50, nullable=true)
     */
    private $idtipoarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrearchivo", type="string", length=200, nullable=true)
     */
    private $nombrearchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="procesado", type="integer", nullable=false)
     */
    private $procesado;

    /**
     * @var integer
     *
     * @ORM\Column(name="noprocesado", type="integer", nullable=false)
     */
    private $noprocesado;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalprocesado", type="integer", nullable=false)
     */
    private $totalprocesado;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalregistros", type="integer", nullable=false)
     */
    private $totalregistros;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50, nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaproceso", type="datetime", nullable=true)
     */
    private $fechaproceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoProceso", type="smallint", nullable=true)
     */
    private $tipoproceso;



    /**
     * Get idcontrol
     *
     * @return integer 
     */
    public function getIdcontrol()
    {
        return $this->idcontrol;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Controlprocesos
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
     * Set idtipoarchivo
     *
     * @param string $idtipoarchivo
     * @return Controlprocesos
     */
    public function setIdtipoarchivo($idtipoarchivo)
    {
        $this->idtipoarchivo = $idtipoarchivo;

        return $this;
    }

    /**
     * Get idtipoarchivo
     *
     * @return string 
     */
    public function getIdtipoarchivo()
    {
        return $this->idtipoarchivo;
    }

    /**
     * Set nombrearchivo
     *
     * @param string $nombrearchivo
     * @return Controlprocesos
     */
    public function setNombrearchivo($nombrearchivo)
    {
        $this->nombrearchivo = $nombrearchivo;

        return $this;
    }

    /**
     * Get nombrearchivo
     *
     * @return string 
     */
    public function getNombrearchivo()
    {
        return $this->nombrearchivo;
    }

    /**
     * Set procesado
     *
     * @param integer $procesado
     * @return Controlprocesos
     */
    public function setProcesado($procesado)
    {
        $this->procesado = $procesado;

        return $this;
    }

    /**
     * Get procesado
     *
     * @return integer 
     */
    public function getProcesado()
    {
        return $this->procesado;
    }

    /**
     * Set noprocesado
     *
     * @param integer $noprocesado
     * @return Controlprocesos
     */
    public function setNoprocesado($noprocesado)
    {
        $this->noprocesado = $noprocesado;

        return $this;
    }

    /**
     * Get noprocesado
     *
     * @return integer 
     */
    public function getNoprocesado()
    {
        return $this->noprocesado;
    }

    /**
     * Set totalprocesado
     *
     * @param integer $totalprocesado
     * @return Controlprocesos
     */
    public function setTotalprocesado($totalprocesado)
    {
        $this->totalprocesado = $totalprocesado;

        return $this;
    }

    /**
     * Get totalprocesado
     *
     * @return integer 
     */
    public function getTotalprocesado()
    {
        return $this->totalprocesado;
    }

    /**
     * Set totalregistros
     *
     * @param integer $totalregistros
     * @return Controlprocesos
     */
    public function setTotalregistros($totalregistros)
    {
        $this->totalregistros = $totalregistros;

        return $this;
    }

    /**
     * Get totalregistros
     *
     * @return integer 
     */
    public function getTotalregistros()
    {
        return $this->totalregistros;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Controlprocesos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaproceso
     *
     * @param \DateTime $fechaproceso
     * @return Controlprocesos
     */
    public function setFechaproceso($fechaproceso)
    {
        $this->fechaproceso = $fechaproceso;

        return $this;
    }

    /**
     * Get fechaproceso
     *
     * @return \DateTime 
     */
    public function getFechaproceso()
    {
        return $this->fechaproceso;
    }

    /**
     * Set tipoproceso
     *
     * @param integer $tipoproceso
     * @return Controlprocesos
     */
    public function setTipoproceso($tipoproceso)
    {
        $this->tipoproceso = $tipoproceso;

        return $this;
    }

    /**
     * Get tipoproceso
     *
     * @return integer 
     */
    public function getTipoproceso()
    {
        return $this->tipoproceso;
    }
}
