<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosCredencialesAplicacion
 *
 * @ORM\Table(name="cobros_credenciales_aplicacion")
 * @ORM\Entity
 */
class CobrosCredencialesAplicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idaplicacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrocred", type="integer", nullable=true)
     */
    private $idcobrocred;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaplicacion", type="datetime", nullable=true)
     */
    private $fechaaplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;



    /**
     * Get idaplicacion
     *
     * @return integer 
     */
    public function getIdaplicacion()
    {
        return $this->idaplicacion;
    }

    /**
     * Set idcobrocred
     *
     * @param integer $idcobrocred
     * @return CobrosCredencialesAplicacion
     */
    public function setIdcobrocred($idcobrocred)
    {
        $this->idcobrocred = $idcobrocred;

        return $this;
    }

    /**
     * Get idcobrocred
     *
     * @return integer 
     */
    public function getIdcobrocred()
    {
        return $this->idcobrocred;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return CobrosCredencialesAplicacion
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return integer 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set fechaaplicacion
     *
     * @param \DateTime $fechaaplicacion
     * @return CobrosCredencialesAplicacion
     */
    public function setFechaaplicacion($fechaaplicacion)
    {
        $this->fechaaplicacion = $fechaaplicacion;

        return $this;
    }

    /**
     * Get fechaaplicacion
     *
     * @return \DateTime 
     */
    public function getFechaaplicacion()
    {
        return $this->fechaaplicacion;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return CobrosCredencialesAplicacion
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
     * Set activo
     *
     * @param integer $activo
     * @return CobrosCredencialesAplicacion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
