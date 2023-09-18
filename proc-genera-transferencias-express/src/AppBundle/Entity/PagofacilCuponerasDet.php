<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagofacilCuponerasDet
 *
 * @ORM\Table(name="pagofacil_cuponeras_det", indexes={@ORM\Index(name="idx_pagofacil_cuponeras_det_idcupon", columns={"idcupon"})})
 * @ORM\Entity
 */
class PagofacilCuponerasDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetalle_cuponera", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetalleCuponera;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcuponera", type="integer", nullable=true)
     */
    private $idcuponera;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=true)
     */
    private $idcupon;



    /**
     * Get iddetalleCuponera
     *
     * @return integer 
     */
    public function getIddetalleCuponera()
    {
        return $this->iddetalleCuponera;
    }

    /**
     * Set idcuponera
     *
     * @param integer $idcuponera
     * @return PagofacilCuponerasDet
     */
    public function setIdcuponera($idcuponera)
    {
        $this->idcuponera = $idcuponera;

        return $this;
    }

    /**
     * Get idcuponera
     *
     * @return integer 
     */
    public function getIdcuponera()
    {
        return $this->idcuponera;
    }

    /**
     * Set idcupon
     *
     * @param integer $idcupon
     * @return PagofacilCuponerasDet
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
