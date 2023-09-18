<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosDestransitados
 *
 * @ORM\Table(name="cobros_destransitados")
 * @ORM\Entity
 */
class CobrosDestransitados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobrod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobrod;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="integer", nullable=true)
     */
    private $idoperador;

    /**
     * @var string
     *
     * @ORM\Column(name="idfactura", type="string", length=100, nullable=true)
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=200, nullable=true)
     */
    private $motivo;



    /**
     * Get idcobrod
     *
     * @return integer 
     */
    public function getIdcobrod()
    {
        return $this->idcobrod;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return CobrosDestransitados
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
     * Set idfactura
     *
     * @param string $idfactura
     * @return CobrosDestransitados
     */
    public function setIdfactura($idfactura)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return string 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CobrosDestransitados
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
     * Set motivo
     *
     * @param string $motivo
     * @return CobrosDestransitados
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
}
