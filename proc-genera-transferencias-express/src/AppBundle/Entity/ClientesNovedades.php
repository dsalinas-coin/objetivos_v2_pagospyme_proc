<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesNovedades
 *
 * @ORM\Table(name="clientes_novedades")
 * @ORM\Entity
 */
class ClientesNovedades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente_novedad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclienteNovedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_visto", type="datetime", nullable=false)
     */
    private $fechaVisto;



    /**
     * Get idclienteNovedad
     *
     * @return integer 
     */
    public function getIdclienteNovedad()
    {
        return $this->idclienteNovedad;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ClientesNovedades
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
     * Set fechaVisto
     *
     * @param \DateTime $fechaVisto
     * @return ClientesNovedades
     */
    public function setFechaVisto($fechaVisto)
    {
        $this->fechaVisto = $fechaVisto;

        return $this;
    }

    /**
     * Get fechaVisto
     *
     * @return \DateTime 
     */
    public function getFechaVisto()
    {
        return $this->fechaVisto;
    }
}
