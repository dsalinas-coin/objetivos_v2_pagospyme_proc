<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logueos
 *
 * @ORM\Table(name="logueos")
 * @ORM\Entity
 */
class Logueos
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_logueo", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogueo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechain", type="datetime", nullable=true)
     */
    private $fechain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaout", type="datetime", nullable=true)
     */
    private $fechaout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaout2", type="datetime", nullable=true)
     */
    private $fechaout2;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;



    /**
     * Get idLogueo
     *
     * @return string 
     */
    public function getIdLogueo()
    {
        return $this->idLogueo;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return Logueos
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
     * Set fechain
     *
     * @param \DateTime $fechain
     * @return Logueos
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
     * @return Logueos
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
     * Set fechaout2
     *
     * @param \DateTime $fechaout2
     * @return Logueos
     */
    public function setFechaout2($fechaout2)
    {
        $this->fechaout2 = $fechaout2;

        return $this;
    }

    /**
     * Get fechaout2
     *
     * @return \DateTime 
     */
    public function getFechaout2()
    {
        return $this->fechaout2;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Logueos
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
