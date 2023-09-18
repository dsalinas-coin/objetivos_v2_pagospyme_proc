<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransferenciasDet
 *
 * @ORM\Table(name="transferencias_det")
 * @ORM\Entity
 */
class TransferenciasDet
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
     * @ORM\Column(name="idtransferencia", type="integer", nullable=true)
     */
    private $idtransferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var string
     *
     * @ORM\Column(name="idzona", type="string", length=20, nullable=true)
     */
    private $idzona;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="smallint", nullable=true)
     */
    private $idcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe",type="decimal", precision=8, scale=2, nullable=true)
     */
    private $importe;



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
     * Set idtransferencia
     *
     * @param integer $idtransferencia
     *
     * @return TransferenciasDet
     */
    public function setIdtransferencia($idtransferencia)
    {
        $this->idtransferencia = $idtransferencia;

        return $this;
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
     * Set fechapago
     *
     * @param \DateTime $fechapago
     *
     * @return TransferenciasDet
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
     * Set idzona
     *
     * @param string $idzona
     *
     * @return TransferenciasDet
     */
    public function setIdzona($idzona)
    {
        $this->idzona = $idzona;

        return $this;
    }

    /**
     * Get idzona
     *
     * @return string
     */
    public function getIdzona()
    {
        return $this->idzona;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return TransferenciasDet
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return TransferenciasDet
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set importe
     *
     * @param float $importe
     *
     * @return TransferenciasDet
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float
     */
    public function getImporte()
    {
        return $this->importe;
    }
}
