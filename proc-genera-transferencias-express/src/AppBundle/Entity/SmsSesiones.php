<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsSesiones
 *
 * @ORM\Table(name="sms_sesiones")
 * @ORM\Entity
 */
class SmsSesiones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsesion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsesion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="remitente", type="integer", nullable=true)
     */
    private $remitente;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa_actual", type="smallint", nullable=true)
     */
    private $etapaActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="idultimosms", type="integer", nullable=true)
     */
    private $idultimosms;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="smallint", nullable=true)
     */
    private $activo;



    /**
     * Get idsesion
     *
     * @return integer 
     */
    public function getIdsesion()
    {
        return $this->idsesion;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SmsSesiones
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set remitente
     *
     * @param integer $remitente
     * @return SmsSesiones
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return integer 
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set etapaActual
     *
     * @param integer $etapaActual
     * @return SmsSesiones
     */
    public function setEtapaActual($etapaActual)
    {
        $this->etapaActual = $etapaActual;

        return $this;
    }

    /**
     * Get etapaActual
     *
     * @return integer 
     */
    public function getEtapaActual()
    {
        return $this->etapaActual;
    }

    /**
     * Set idultimosms
     *
     * @param integer $idultimosms
     * @return SmsSesiones
     */
    public function setIdultimosms($idultimosms)
    {
        $this->idultimosms = $idultimosms;

        return $this;
    }

    /**
     * Get idultimosms
     *
     * @return integer 
     */
    public function getIdultimosms()
    {
        return $this->idultimosms;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return SmsSesiones
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
