<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisOtrosItems
 *
 * @ORM\Table(name="sis_otros_items")
 * @ORM\Entity
 */
class SisOtrosItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iditem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditem;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idconcepto", type="smallint", nullable=true)
     */
    private $idconcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="smallint", nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pbruto_unitario", type="integer", nullable=true)
     */
    private $pbrutoUnitario;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="pneto_unitario", type="integer", nullable=true)
     */
    private $pnetoUnitario;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_neto", type="integer", nullable=true)
     */
    private $totalNeto;



    /**
     * Get iditem
     *
     * @return integer 
     */
    public function getIditem()
    {
        return $this->iditem;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return SisOtrosItems
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
     * Set idconcepto
     *
     * @param integer $idconcepto
     * @return SisOtrosItems
     */
    public function setIdconcepto($idconcepto)
    {
        $this->idconcepto = $idconcepto;

        return $this;
    }

    /**
     * Get idconcepto
     *
     * @return integer 
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return SisOtrosItems
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
     * Set pbrutoUnitario
     *
     * @param integer $pbrutoUnitario
     * @return SisOtrosItems
     */
    public function setPbrutoUnitario($pbrutoUnitario)
    {
        $this->pbrutoUnitario = $pbrutoUnitario;

        return $this;
    }

    /**
     * Get pbrutoUnitario
     *
     * @return integer 
     */
    public function getPbrutoUnitario()
    {
        return $this->pbrutoUnitario;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return SisOtrosItems
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set pnetoUnitario
     *
     * @param integer $pnetoUnitario
     * @return SisOtrosItems
     */
    public function setPnetoUnitario($pnetoUnitario)
    {
        $this->pnetoUnitario = $pnetoUnitario;

        return $this;
    }

    /**
     * Get pnetoUnitario
     *
     * @return integer 
     */
    public function getPnetoUnitario()
    {
        return $this->pnetoUnitario;
    }

    /**
     * Set totalNeto
     *
     * @param integer $totalNeto
     * @return SisOtrosItems
     */
    public function setTotalNeto($totalNeto)
    {
        $this->totalNeto = $totalNeto;

        return $this;
    }

    /**
     * Get totalNeto
     *
     * @return integer 
     */
    public function getTotalNeto()
    {
        return $this->totalNeto;
    }
}
