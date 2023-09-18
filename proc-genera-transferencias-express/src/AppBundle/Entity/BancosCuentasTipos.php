<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BancosCuentasTipos
 *
 * @ORM\Table(name="bancos_cuentas_tipos")
 * @ORM\Entity
 */
class BancosCuentasTipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcuenta_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuentaTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idcuentaTipo
     *
     * @return integer 
     */
    public function getIdcuentaTipo()
    {
        return $this->idcuentaTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return BancosCuentasTipos
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
}
