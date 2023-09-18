<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosBanelcoTipos
 *
 * @ORM\Table(name="archivos_banelco_tipos")
 * @ORM\Entity
 */
class ArchivosBanelcoTipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarchivo_banelco_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchivoBanelcoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=false)
     */
    private $activo;



    /**
     * Get idarchivoBanelcoTipo
     *
     * @return integer 
     */
    public function getIdarchivoBanelcoTipo()
    {
        return $this->idarchivoBanelcoTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ArchivosBanelcoTipos
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
     * @param integer $activo
     * @return ArchivosBanelcoTipos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
