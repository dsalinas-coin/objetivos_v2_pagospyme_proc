<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CliMails
 *
 * @ORM\Table(name="cli_mails")
 * @ORM\Entity
 */
class CliMails
{
    /**
     * @var string
     *
     * @ORM\Column(name="idmail", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmail;

    /**
     * @var string
     *
     * @ORM\Column(name="idcliente", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="idaccion", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="desde", type="string", length=200, nullable=false)
     */
    private $desde;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_desde", type="string", length=200, nullable=true)
     */
    private $descDesde;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=200, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="replyto", type="string", length=200, nullable=true)
     */
    private $replyto;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=8, nullable=false)
     */
    private $texto;



    /**
     * Get idmail
     *
     * @return string 
     */
    public function getIdmail()
    {
        return $this->idmail;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return CliMails
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
     * Set idaccion
     *
     * @param string $idaccion
     * @return CliMails
     */
    public function setIdaccion($idaccion)
    {
        $this->idaccion = $idaccion;

        return $this;
    }

    /**
     * Get idaccion
     *
     * @return string 
     */
    public function getIdaccion()
    {
        return $this->idaccion;
    }

    /**
     * Set desde
     *
     * @param string $desde
     * @return CliMails
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return string 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set descDesde
     *
     * @param string $descDesde
     * @return CliMails
     */
    public function setDescDesde($descDesde)
    {
        $this->descDesde = $descDesde;

        return $this;
    }

    /**
     * Get descDesde
     *
     * @return string 
     */
    public function getDescDesde()
    {
        return $this->descDesde;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return CliMails
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set replyto
     *
     * @param string $replyto
     * @return CliMails
     */
    public function setReplyto($replyto)
    {
        $this->replyto = $replyto;

        return $this;
    }

    /**
     * Get replyto
     *
     * @return string 
     */
    public function getReplyto()
    {
        return $this->replyto;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return CliMails
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }
}
