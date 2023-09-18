<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosSinaplicar
 *
 * @ORM\Table(name="cobros_sinaplicar")
 * @ORM\Entity
 */
class CobrosSinaplicar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=false)
     */
    private $idservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=false)
     */
    private $fechapago;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="aplicado", type="smallint", nullable=false)
     */
    private $aplicado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_internas", type="string", length=200, nullable=true)
     */
    private $observacionesInternas;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=true)
     */
    private $idcupon;



    /**
     * Get idcobro
     *
     * @return integer 
     */
    public function getIdcobro()
    {
        return $this->idcobro;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return CobrosSinaplicar
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return CobrosSinaplicar
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
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return CobrosSinaplicar
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
     * Set importe
     *
     * @param integer $importe
     * @return CobrosSinaplicar
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
     * Set aplicado
     *
     * @param integer $aplicado
     * @return CobrosSinaplicar
     */
    public function setAplicado($aplicado)
    {
        $this->aplicado = $aplicado;

        return $this;
    }

    /**
     * Get aplicado
     *
     * @return integer 
     */
    public function getAplicado()
    {
        return $this->aplicado;
    }

    /**
     * Set observacionesInternas
     *
     * @param string $observacionesInternas
     * @return CobrosSinaplicar
     */
    public function setObservacionesInternas($observacionesInternas)
    {
        $this->observacionesInternas = $observacionesInternas;

        return $this;
    }

    /**
     * Get observacionesInternas
     *
     * @return string 
     */
    public function getObservacionesInternas()
    {
        return $this->observacionesInternas;
    }

    /**
     * Set idcupon
     *
     * @param integer $idcupon
     * @return CobrosSinaplicar
     */
    public function setIdcupon($idcupon)
    {
        $this->idcupon = $idcupon;

        return $this;
    }

    /**
     * Get idcupon
     *
     * @return integer 
     */
    public function getIdcupon()
    {
        return $this->idcupon;
    }
}
