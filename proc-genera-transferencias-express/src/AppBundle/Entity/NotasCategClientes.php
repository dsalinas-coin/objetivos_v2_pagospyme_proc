<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasCategClientes
 *
 * @ORM\Table(name="notas_categ_clientes")
 * @ORM\Entity
 */
class NotasCategClientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnotacateg", type="integer", nullable=true)
     */
    private $idnotacateg;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=300, nullable=true)
     */
    private $email;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return NotasCategClientes
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
     * Set idnotacateg
     *
     * @param integer $idnotacateg
     * @return NotasCategClientes
     */
    public function setIdnotacateg($idnotacateg)
    {
        $this->idnotacateg = $idnotacateg;

        return $this;
    }

    /**
     * Get idnotacateg
     *
     * @return integer 
     */
    public function getIdnotacateg()
    {
        return $this->idnotacateg;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return NotasCategClientes
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
}
