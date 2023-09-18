<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bancos
 *
 * @ORM\Table(name="bancos")
 * @ORM\Entity
 */
class Bancos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbanco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanco;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbanco", type="integer", nullable=false)
     */
    private $codbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=200, nullable=false)
     */
    private $banco;



    /**
     * Get idbanco
     *
     * @return integer 
     */
    public function getIdbanco()
    {
        return $this->idbanco;
    }

    /**
     * Set codbanco
     *
     * @param integer $codbanco
     * @return Bancos
     */
    public function setCodbanco($codbanco)
    {
        $this->codbanco = $codbanco;

        return $this;
    }

    /**
     * Get codbanco
     *
     * @return integer 
     */
    public function getCodbanco()
    {
        return $this->codbanco;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return Bancos
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }
}
