<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SisTareas
 *
 * @ORM\Table(name="sis_tareas")
 * @ORM\Entity
 */
class SisTareas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtarea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtarea;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador", type="smallint", nullable=false)
     */
    private $idoperador;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=100, nullable=false)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="text", length=-1, nullable=false)
     */
    private $detalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="smallint", nullable=true)
     */
    private $idcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoperador_acargo", type="smallint", nullable=true)
     */
    private $idoperadorAcargo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=true)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechasolicitfin", type="datetime", nullable=true)
     */
    private $fechasolicitfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavisto", type="datetime", nullable=true)
     */
    private $fechavisto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestinicio", type="datetime", nullable=true)
     */
    private $fechaestinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestfin", type="datetime", nullable=true)
     */
    private $fechaestfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="datetime", nullable=true)
     */
    private $fechafin;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgente", type="smallint", nullable=true)
     */
    private $urgente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprioridad", type="smallint", nullable=true)
     */
    private $idprioridad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idplazo", type="smallint", nullable=false)
     */
    private $idplazo;

    /**
     * @var integer
     *
     * @ORM\Column(name="interno_sistemas", type="smallint", nullable=true)
     */
    private $internoSistemas;

    /**
     * @var integer
     *
     * @ORM\Column(name="progreso_estimado", type="smallint", nullable=true)
     */
    private $progresoEstimado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="smallint", nullable=true)
     */
    private $idestado;



    /**
     * Get idtarea
     *
     * @return integer 
     */
    public function getIdtarea()
    {
        return $this->idtarea;
    }

    /**
     * Set idoperador
     *
     * @param integer $idoperador
     * @return SisTareas
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
     * Set asunto
     *
     * @param string $asunto
     * @return SisTareas
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return SisTareas
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     * @return SisTareas
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set idoperadorAcargo
     *
     * @param integer $idoperadorAcargo
     * @return SisTareas
     */
    public function setIdoperadorAcargo($idoperadorAcargo)
    {
        $this->idoperadorAcargo = $idoperadorAcargo;

        return $this;
    }

    /**
     * Get idoperadorAcargo
     *
     * @return integer 
     */
    public function getIdoperadorAcargo()
    {
        return $this->idoperadorAcargo;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SisTareas
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
     * Set fechasolicitfin
     *
     * @param \DateTime $fechasolicitfin
     * @return SisTareas
     */
    public function setFechasolicitfin($fechasolicitfin)
    {
        $this->fechasolicitfin = $fechasolicitfin;

        return $this;
    }

    /**
     * Get fechasolicitfin
     *
     * @return \DateTime 
     */
    public function getFechasolicitfin()
    {
        return $this->fechasolicitfin;
    }

    /**
     * Set fechavisto
     *
     * @param \DateTime $fechavisto
     * @return SisTareas
     */
    public function setFechavisto($fechavisto)
    {
        $this->fechavisto = $fechavisto;

        return $this;
    }

    /**
     * Get fechavisto
     *
     * @return \DateTime 
     */
    public function getFechavisto()
    {
        return $this->fechavisto;
    }

    /**
     * Set fechaestinicio
     *
     * @param \DateTime $fechaestinicio
     * @return SisTareas
     */
    public function setFechaestinicio($fechaestinicio)
    {
        $this->fechaestinicio = $fechaestinicio;

        return $this;
    }

    /**
     * Get fechaestinicio
     *
     * @return \DateTime 
     */
    public function getFechaestinicio()
    {
        return $this->fechaestinicio;
    }

    /**
     * Set fechaestfin
     *
     * @param \DateTime $fechaestfin
     * @return SisTareas
     */
    public function setFechaestfin($fechaestfin)
    {
        $this->fechaestfin = $fechaestfin;

        return $this;
    }

    /**
     * Get fechaestfin
     *
     * @return \DateTime 
     */
    public function getFechaestfin()
    {
        return $this->fechaestfin;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return SisTareas
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return SisTareas
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set urgente
     *
     * @param integer $urgente
     * @return SisTareas
     */
    public function setUrgente($urgente)
    {
        $this->urgente = $urgente;

        return $this;
    }

    /**
     * Get urgente
     *
     * @return integer 
     */
    public function getUrgente()
    {
        return $this->urgente;
    }

    /**
     * Set idprioridad
     *
     * @param integer $idprioridad
     * @return SisTareas
     */
    public function setIdprioridad($idprioridad)
    {
        $this->idprioridad = $idprioridad;

        return $this;
    }

    /**
     * Get idprioridad
     *
     * @return integer 
     */
    public function getIdprioridad()
    {
        return $this->idprioridad;
    }

    /**
     * Set idplazo
     *
     * @param integer $idplazo
     * @return SisTareas
     */
    public function setIdplazo($idplazo)
    {
        $this->idplazo = $idplazo;

        return $this;
    }

    /**
     * Get idplazo
     *
     * @return integer 
     */
    public function getIdplazo()
    {
        return $this->idplazo;
    }

    /**
     * Set internoSistemas
     *
     * @param integer $internoSistemas
     * @return SisTareas
     */
    public function setInternoSistemas($internoSistemas)
    {
        $this->internoSistemas = $internoSistemas;

        return $this;
    }

    /**
     * Get internoSistemas
     *
     * @return integer 
     */
    public function getInternoSistemas()
    {
        return $this->internoSistemas;
    }

    /**
     * Set progresoEstimado
     *
     * @param integer $progresoEstimado
     * @return SisTareas
     */
    public function setProgresoEstimado($progresoEstimado)
    {
        $this->progresoEstimado = $progresoEstimado;

        return $this;
    }

    /**
     * Get progresoEstimado
     *
     * @return integer 
     */
    public function getProgresoEstimado()
    {
        return $this->progresoEstimado;
    }

    /**
     * Set idestado
     *
     * @param integer $idestado
     * @return SisTareas
     */
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

        return $this;
    }

    /**
     * Get idestado
     *
     * @return integer 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }
}
