<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediospagoTipos
 *
 * @ORM\Table(name="mediospago_tipos")
 * @ORM\Entity
 */
class MediospagoTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var \MediospagoTipos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="MediospagoTipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipo", referencedColumnName="idtipo")
     * })
     */
    private $idtipo;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return MediospagoTipos
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
     * Set activo
     *
     * @param boolean $activo
     * @return MediospagoTipos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idtipo
     *
     * @param \AppBundle\Entity\MediospagoTipos $idtipo
     * @return MediospagoTipos
     */
    public function setIdtipo(\AppBundle\Entity\MediospagoTipos $idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return \AppBundle\Entity\MediospagoTipos 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }
}
