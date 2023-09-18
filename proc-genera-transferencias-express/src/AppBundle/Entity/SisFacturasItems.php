<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisFacturasItems
 *
 * @ORM\Table(name="sis_facturas_items", indexes={@ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K2_K3_6", columns={"total", "idfactura", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K2_K3", columns={"idfactura", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_K2", columns={"idconcepto", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_K2_6", columns={"total", "idconcepto", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3", columns={"idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K2_K3_6_1912", columns={"total", "idfactura", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K2_K3_2894", columns={"idfactura", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_2", columns={"idfactura", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_K2_6221", columns={"idconcepto", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_2_6", columns={"idfactura", "total", "idconcepto"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_K2_6_3982", columns={"total", "idconcepto", "idfactura"}), @ORM\Index(name="_dta_index_sis_facturas_items_5_990678627__K3_3928", columns={"idconcepto"}), @ORM\Index(name="NonClusteredIndex-20161003-111320", columns={"idfactura"})})
 * @ORM\Entity
 */
class SisFacturasItems
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
     * @var string
     *
     * @ORM\Column(name="idconcepto", type="string", length=100, nullable=true)
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
     * @return SisFacturasItems
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
     * @param string $idconcepto
     * @return SisFacturasItems
     */
    public function setIdconcepto($idconcepto)
    {
        $this->idconcepto = $idconcepto;

        return $this;
    }

    /**
     * Get idconcepto
     *
     * @return string 
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return SisFacturasItems
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
     * @return SisFacturasItems
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
     * @return SisFacturasItems
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
     * @return SisFacturasItems
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
     * @return SisFacturasItems
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
