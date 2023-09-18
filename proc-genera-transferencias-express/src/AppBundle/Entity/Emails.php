<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="emails")
 * @ORM\Entity
 */
class Emails
{
    /**
     * @var string
     *
     * @ORM\Column(name="idemail", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemail;

    /**
     * @var string
     *
     * @ORM\Column(name="idcliente", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="pfrom", type="string", length=200, nullable=false)
     */
    private $pfrom;

    /**
     * @var string
     *
     * @ORM\Column(name="psubject", type="string", length=200, nullable=false)
     */
    private $psubject;

    /**
     * @var string
     *
     * @ORM\Column(name="pbody", type="string", length=0, nullable=true)
     */
    private $pbody;

    /**
     * @var string
     *
     * @ORM\Column(name="phtml", type="string", length=200, nullable=true)
     */
    private $phtml;

    /**
     * @var string
     *
     * @ORM\Column(name="idtipo", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idtipo;



    /**
     * Get idemail
     *
     * @return string 
     */
    public function getIdemail()
    {
        return $this->idemail;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return Emails
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return string 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set pfrom
     *
     * @param string $pfrom
     * @return Emails
     */
    public function setPfrom($pfrom)
    {
        $this->pfrom = $pfrom;

        return $this;
    }

    /**
     * Get pfrom
     *
     * @return string 
     */
    public function getPfrom()
    {
        return $this->pfrom;
    }

    /**
     * Set psubject
     *
     * @param string $psubject
     * @return Emails
     */
    public function setPsubject($psubject)
    {
        $this->psubject = $psubject;

        return $this;
    }

    /**
     * Get psubject
     *
     * @return string 
     */
    public function getPsubject()
    {
        return $this->psubject;
    }

    /**
     * Set pbody
     *
     * @param string $pbody
     * @return Emails
     */
    public function setPbody($pbody)
    {
        $this->pbody = $pbody;

        return $this;
    }

    /**
     * Get pbody
     *
     * @return string 
     */
    public function getPbody()
    {
        return $this->pbody;
    }

    /**
     * Set phtml
     *
     * @param string $phtml
     * @return Emails
     */
    public function setPhtml($phtml)
    {
        $this->phtml = $phtml;

        return $this;
    }

    /**
     * Get phtml
     *
     * @return string 
     */
    public function getPhtml()
    {
        return $this->phtml;
    }

    /**
     * Set idtipo
     *
     * @param string $idtipo
     * @return Emails
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return string 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }
}
