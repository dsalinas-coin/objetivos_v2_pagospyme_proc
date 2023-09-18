<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesTiposervicio
 *
 * @ORM\Table(name="clientes_tiposervicio")
 * @ORM\Entity
 */
class ClientesTiposervicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtiposervicio", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtiposervicio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="smallint", nullable=true)
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="idempresa", type="integer", nullable=true)
     */
    private $idempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=50, nullable=true)
     */
    private $abreviatura;



    /**
     * Get idtiposervicio
     *
     * @return integer 
     */
    public function getIdtiposervicio()
    {
        return $this->idtiposervicio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ClientesTiposervicio
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
     * Set visible
     *
     * @param integer $visible
     * @return ClientesTiposervicio
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set idempresa
     *
     * @param integer $idempresa
     * @return ClientesTiposervicio
     */
    public function setIdempresa($idempresa)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return integer 
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return ClientesTiposervicio
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }
}
