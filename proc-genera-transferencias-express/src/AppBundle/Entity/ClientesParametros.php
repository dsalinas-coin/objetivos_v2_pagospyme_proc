<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesParametros
 *
 * @ORM\Table(name="clientes_parametros")
 * @ORM\Entity
 */
class ClientesParametros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparametro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparametro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idclave", type="integer", nullable=false)
     */
    private $idclave;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=200, nullable=false)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;



    /**
     * Get idparametro
     *
     * @return integer 
     */
    public function getIdparametro()
    {
        return $this->idparametro;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ClientesParametros
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idclave
     *
     * @param integer $idclave
     * @return ClientesParametros
     */
    public function setIdclave($idclave)
    {
        $this->idclave = $idclave;

        return $this;
    }

    /**
     * Get idclave
     *
     * @return integer 
     */
    public function getIdclave()
    {
        return $this->idclave;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return ClientesParametros
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ClientesParametros
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
