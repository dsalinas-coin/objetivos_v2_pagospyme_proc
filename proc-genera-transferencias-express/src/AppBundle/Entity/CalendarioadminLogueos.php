<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarioadminLogueos
 *
 * @ORM\Table(name="calendarioadmin_logueos")
 * @ORM\Entity
 */
class CalendarioadminLogueos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlogueo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlogueo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechain", type="datetime", nullable=false)
     */
    private $fechain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaout", type="datetime", nullable=true)
     */
    private $fechaout;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="smallint", nullable=false)
     */
    private $idoperador;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=100, nullable=false)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado;



    /**
     * Get idlogueo
     *
     * @return integer 
     */
    public function getIdlogueo()
    {
        return $this->idlogueo;
    }

    /**
     * Set fechain
     *
     * @param \DateTime $fechain
     * @return CalendarioadminLogueos
     */
    public function setFechain($fechain)
    {
        $this->fechain = $fechain;

        return $this;
    }

    /**
     * Get fechain
     *
     * @return \DateTime 
     */
    public function getFechain()
    {
        return $this->fechain;
    }

    /**
     * Set fechaout
     *
     * @param \DateTime $fechaout
     * @return CalendarioadminLogueos
     */
    public function setFechaout($fechaout)
    {
        $this->fechaout = $fechaout;

        return $this;
    }

    /**
     * Get fechaout
     *
     * @return \DateTime 
     */
    public function getFechaout()
    {
        return $this->fechaout;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return CalendarioadminLogueos
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
     * Set codigo
     *
     * @param string $codigo
     * @return CalendarioadminLogueos
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
     * Set estado
     *
     * @param integer $estado
     * @return CalendarioadminLogueos
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
