<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsCajadepagos
 *
 * @ORM\Table(name="emails_cajadepagos")
 * @ORM\Entity
 */
class EmailsCajadepagos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idemail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemail;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo", type="integer", nullable=true)
     */
    private $idtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="pfrom", type="text", length=-1, nullable=true)
     */
    private $pfrom;

    /**
     * @var string
     *
     * @ORM\Column(name="psubject", type="text", length=-1, nullable=true)
     */
    private $psubject;

    /**
     * @var string
     *
     * @ORM\Column(name="pbody", type="text", length=-1, nullable=true)
     */
    private $pbody;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idemail
     *
     * @return integer 
     */
    public function getIdemail()
    {
        return $this->idemail;
    }

    /**
     * Set idtipo
     *
     * @param integer $idtipo
     * @return EmailsCajadepagos
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return integer 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set pfrom
     *
     * @param string $pfrom
     * @return EmailsCajadepagos
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
     * @return EmailsCajadepagos
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
     * @return EmailsCajadepagos
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
     * Set estado
     *
     * @param integer $estado
     * @return EmailsCajadepagos
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
