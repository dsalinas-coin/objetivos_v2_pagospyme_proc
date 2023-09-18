<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablatempTama
 *
 * @ORM\Table(name="tablatemp_tama")
 * @ORM\Entity
 */
class TablatempTama
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
     * @ORM\Column(name="idusuario", type="integer", nullable=true)
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="numcliente", type="string", length=50, nullable=true)
     */
    private $numcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;



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
     * Set idusuario
     *
     * @param integer $idusuario
     * @return TablatempTama
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
     * Set numcliente
     *
     * @param string $numcliente
     * @return TablatempTama
     */
    public function setNumcliente($numcliente)
    {
        $this->numcliente = $numcliente;

        return $this;
    }

    /**
     * Get numcliente
     *
     * @return string 
     */
    public function getNumcliente()
    {
        return $this->numcliente;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return TablatempTama
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return TablatempTama
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
