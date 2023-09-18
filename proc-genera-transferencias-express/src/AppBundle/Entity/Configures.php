<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configures
 *
 * @ORM\Table(name="configures", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__Configures__02FC7413", columns={"idconfig"})})
 * @ORM\Entity
 */
class Configures
{
    /**
     * @var string
     *
     * @ORM\Column(name="idconfig", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconfig;

    /**
     * @var string
     *
     * @ORM\Column(name="idconsulta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idconsulta;

    /**
     * @var integer
     *
     * @ORM\Column(name="posicion", type="integer", nullable=false)
     */
    private $posicion;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=40, nullable=false)
     */
    private $campo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=30, nullable=true)
     */
    private $formato;



    /**
     * Get idconfig
     *
     * @return string 
     */
    public function getIdconfig()
    {
        return $this->idconfig;
    }

    /**
     * Set idconsulta
     *
     * @param string $idconsulta
     * @return Configures
     */
    public function setIdconsulta($idconsulta)
    {
        $this->idconsulta = $idconsulta;

        return $this;
    }

    /**
     * Get idconsulta
     *
     * @return string 
     */
    public function getIdconsulta()
    {
        return $this->idconsulta;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return Configures
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set campo
     *
     * @param string $campo
     * @return Configures
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string 
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Configures
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
     * Set formato
     *
     * @param string $formato
     * @return Configures
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }
}
