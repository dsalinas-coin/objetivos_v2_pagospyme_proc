<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogProcesos
 *
 * @ORM\Table(name="log_procesos", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__log_procesos__1ECF7711", columns={"idproceso"})})
 * @ORM\Entity
 */
class LogProcesos
{
    /**
     * @var string
     *
     * @ORM\Column(name="idproceso", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="idsubproc", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $idsubproc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="modulo", type="string", length=100, nullable=false)
     */
    private $modulo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", length=8, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="idtipo", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idtipo;



    /**
     * Get idproceso
     *
     * @return string 
     */
    public function getIdproceso()
    {
        return $this->idproceso;
    }

    /**
     * Set idsubproc
     *
     * @param string $idsubproc
     * @return LogProcesos
     */
    public function setIdsubproc($idsubproc)
    {
        $this->idsubproc = $idsubproc;

        return $this;
    }

    /**
     * Get idsubproc
     *
     * @return string 
     */
    public function getIdsubproc()
    {
        return $this->idsubproc;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return LogProcesos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set modulo
     *
     * @param string $modulo
     * @return LogProcesos
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get modulo
     *
     * @return string 
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return LogProcesos
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idtipo
     *
     * @param string $idtipo
     * @return LogProcesos
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return string 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }
}
