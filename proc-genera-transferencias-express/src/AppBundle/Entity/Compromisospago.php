<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compromisospago
 *
 * @ORM\Table(name="compromisospago", indexes={@ORM\Index(name="idnota", columns={"idnota"}), @ORM\Index(name="fechacompromiso", columns={"fechacompromiso"})})
 * @ORM\Entity
 */
class Compromisospago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcompromiso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompromiso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnota", type="integer", nullable=true)
     */
    private $idnota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacompromiso", type="datetime", nullable=true)
     */
    private $fechacompromiso;

    /**
     * @var integer
     *
     * @ORM\Column(name="montocompromiso", type="integer", nullable=true)
     */
    private $montocompromiso;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idcompromiso
     *
     * @return integer 
     */
    public function getIdcompromiso()
    {
        return $this->idcompromiso;
    }

    /**
     * Set idnota
     *
     * @param integer $idnota
     * @return Compromisospago
     */
    public function setIdnota($idnota)
    {
        $this->idnota = $idnota;

        return $this;
    }

    /**
     * Get idnota
     *
     * @return integer 
     */
    public function getIdnota()
    {
        return $this->idnota;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Compromisospago
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
     * Set fechacompromiso
     *
     * @param \DateTime $fechacompromiso
     * @return Compromisospago
     */
    public function setFechacompromiso($fechacompromiso)
    {
        $this->fechacompromiso = $fechacompromiso;

        return $this;
    }

    /**
     * Get fechacompromiso
     *
     * @return \DateTime 
     */
    public function getFechacompromiso()
    {
        return $this->fechacompromiso;
    }

    /**
     * Set montocompromiso
     *
     * @param integer $montocompromiso
     * @return Compromisospago
     */
    public function setMontocompromiso($montocompromiso)
    {
        $this->montocompromiso = $montocompromiso;

        return $this;
    }

    /**
     * Get montocompromiso
     *
     * @return integer 
     */
    public function getMontocompromiso()
    {
        return $this->montocompromiso;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Compromisospago
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
