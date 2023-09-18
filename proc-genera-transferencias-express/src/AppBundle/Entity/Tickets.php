<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaultima", type="datetime", nullable=true)
     */
    private $fechaultima;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfactura", type="integer", nullable=true)
     */
    private $idfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=100, nullable=true)
     */
    private $asunto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="visto", type="smallint", nullable=true)
     */
    private $visto;



    /**
     * Get idticket
     *
     * @return integer 
     */
    public function getIdticket()
    {
        return $this->idticket;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Tickets
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
     * Set fechaultima
     *
     * @param \DateTime $fechaultima
     * @return Tickets
     */
    public function setFechaultima($fechaultima)
    {
        $this->fechaultima = $fechaultima;

        return $this;
    }

    /**
     * Get fechaultima
     *
     * @return \DateTime 
     */
    public function getFechaultima()
    {
        return $this->fechaultima;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     * @return Tickets
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idfactura
     *
     * @param integer $idfactura
     * @return Tickets
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
     * Set idcategoria
     *
     * @param integer $idcategoria
     * @return Tickets
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
     * Set asunto
     *
     * @param string $asunto
     * @return Tickets
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Tickets
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
     * Set estado
     *
     * @param integer $estado
     * @return Tickets
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

    /**
     * Set visto
     *
     * @param integer $visto
     * @return Tickets
     */
    public function setVisto($visto)
    {
        $this->visto = $visto;

        return $this;
    }

    /**
     * Get visto
     *
     * @return integer 
     */
    public function getVisto()
    {
        return $this->visto;
    }
}
