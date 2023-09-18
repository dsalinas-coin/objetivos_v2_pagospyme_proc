<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposdocumento
 *
 * @ORM\Table(name="tiposdocumento")
 * @ORM\Entity
 */
class Tiposdocumento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipodocumento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo2", type="string", length=3, nullable=true)
     */
    private $codigo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="multiplicador", type="smallint", nullable=true)
     */
    private $multiplicador;



    /**
     * Get idtipodocumento
     *
     * @return integer 
     */
    public function getIdtipodocumento()
    {
        return $this->idtipodocumento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tiposdocumento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Tiposdocumento
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigo2
     *
     * @param string $codigo2
     * @return Tiposdocumento
     */
    public function setCodigo2($codigo2)
    {
        $this->codigo2 = $codigo2;

        return $this;
    }

    /**
     * Get codigo2
     *
     * @return string 
     */
    public function getCodigo2()
    {
        return $this->codigo2;
    }

    /**
     * Set multiplicador
     *
     * @param integer $multiplicador
     * @return Tiposdocumento
     */
    public function setMultiplicador($multiplicador)
    {
        $this->multiplicador = $multiplicador;

        return $this;
    }

    /**
     * Get multiplicador
     *
     * @return integer 
     */
    public function getMultiplicador()
    {
        return $this->multiplicador;
    }
}
