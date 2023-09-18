<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagofacil
 *
 * @ORM\Table(name="pagofacil")
 * @ORM\Entity
 */
class Pagofacil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcupon;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcobro", type="integer", nullable=false)
     */
    private $idcobro;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=40, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cupon", type="text", length=8, nullable=false)
     */
    private $cupon;



    /**
     * Get idcupon
     *
     * @return integer 
     */
    public function getIdcupon()
    {
        return $this->idcupon;
    }

    /**
     * Set idcobro
     *
     * @param integer $idcobro
     * @return Pagofacil
     */
    public function setIdcobro($idcobro)
    {
        $this->idcobro = $idcobro;

        return $this;
    }

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
     * Set codigo
     *
     * @param string $codigo
     * @return Pagofacil
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set cupon
     *
     * @param string $cupon
     * @return Pagofacil
     */
    public function setCupon($cupon)
    {
        $this->cupon = $cupon;

        return $this;
    }

    /**
     * Get cupon
     *
     * @return string 
     */
    public function getCupon()
    {
        return $this->cupon;
    }
}
