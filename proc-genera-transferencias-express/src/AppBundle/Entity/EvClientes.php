<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvClientes
 *
 * @ORM\Table(name="ev_clientes")
 * @ORM\Entity
 */
class EvClientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrefantasia", type="string", length=50, nullable=true)
     */
    private $nombrefantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



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
     * Set nombrefantasia
     *
     * @param string $nombrefantasia
     * @return EvClientes
     */
    public function setNombrefantasia($nombrefantasia)
    {
        $this->nombrefantasia = $nombrefantasia;

        return $this;
    }

    /**
     * Get nombrefantasia
     *
     * @return string 
     */
    public function getNombrefantasia()
    {
        return $this->nombrefantasia;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return EvClientes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return EvClientes
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
