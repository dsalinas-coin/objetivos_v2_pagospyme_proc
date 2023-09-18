<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvListadosDet
 *
 * @ORM\Table(name="ev_listados_det")
 * @ORM\Entity
 */
class EvListadosDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idregistro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontacto", type="integer", nullable=true)
     */
    private $idcontacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="smallint", nullable=true)
     */
    private $idoperador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharealizado", type="datetime", nullable=true)
     */
    private $fecharealizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idregistro
     *
     * @return integer 
     */
    public function getIdregistro()
    {
        return $this->idregistro;
    }

    /**
     * Set idcontacto
     *
     * @param integer $idcontacto
     * @return EvListadosDet
     */
    public function setIdcontacto($idcontacto)
    {
        $this->idcontacto = $idcontacto;

        return $this;
    }

    /**
     * Get idcontacto
     *
     * @return integer 
     */
    public function getIdcontacto()
    {
        return $this->idcontacto;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return EvListadosDet
     */
    public function setIdoperador($idoperador)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set fecharealizado
     *
     * @param \DateTime $fecharealizado
     * @return EvListadosDet
     */
    public function setFecharealizado($fecharealizado)
    {
        $this->fecharealizado = $fecharealizado;

        return $this;
    }

    /**
     * Get fecharealizado
     *
     * @return \DateTime 
     */
    public function getFecharealizado()
    {
        return $this->fecharealizado;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return EvListadosDet
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
