<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperacionesSpsDetalle
 *
 * @ORM\Table(name="operaciones_sps_detalle", uniqueConstraints={@ORM\UniqueConstraint(name="PK_operaciones_sps_detalle", columns={"iddetalle"})})
 * @ORM\Entity
 */
class OperacionesSpsDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperacion", type="integer", nullable=true)
     */
    private $idoperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeparcial", type="integer", nullable=true)
     */
    private $importeparcial;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get iddetalle
     *
     * @return integer 
     */
    public function getIddetalle()
    {
        return $this->iddetalle;
    }

    /**
     * Set idoperacion
     *
     * @param integer $idoperacion
     * @return OperacionesSpsDetalle
     */
    public function setIdoperacion($idoperacion)
    {
        $this->idoperacion = $idoperacion;

        return $this;
    }

    /**
     * Get idoperacion
     *
     * @return integer 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return OperacionesSpsDetalle
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
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return OperacionesSpsDetalle
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
     * Set importeparcial
     *
     * @param integer $importeparcial
     * @return OperacionesSpsDetalle
     */
    public function setImporteparcial($importeparcial)
    {
        $this->importeparcial = $importeparcial;

        return $this;
    }

    /**
     * Get importeparcial
     *
     * @return integer 
     */
    public function getImporteparcial()
    {
        return $this->importeparcial;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return OperacionesSpsDetalle
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
