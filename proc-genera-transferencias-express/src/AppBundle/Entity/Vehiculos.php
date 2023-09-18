<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos", indexes={@ORM\Index(name="idservicio", columns={"idservicio"})})
 * @ORM\Entity
 */
class Vehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvehiculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvehiculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocliente", type="string", length=50, nullable=true)
     */
    private $nrocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=50, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=50, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=20, nullable=true)
     */
    private $patente;

    /**
     * @var string
     *
     * @ORM\Column(name="datoadic1", type="string", length=100, nullable=true)
     */
    private $datoadic1;

    /**
     * @var string
     *
     * @ORM\Column(name="datoadic2", type="string", length=100, nullable=true)
     */
    private $datoadic2;

    /**
     * @var integer
     *
     * @ORM\Column(name="recuperar", type="smallint", nullable=true)
     */
    private $recuperar;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idvehiculo
     *
     * @return integer 
     */
    public function getIdvehiculo()
    {
        return $this->idvehiculo;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return Vehiculos
     */
    public function setIdservicio($idservicio)
    {
        $this->idservicio = $idservicio;

        return $this;
    }

    /**
     * Get idservicio
     *
     * @return integer 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set nrocliente
     *
     * @param string $nrocliente
     * @return Vehiculos
     */
    public function setNrocliente($nrocliente)
    {
        $this->nrocliente = $nrocliente;

        return $this;
    }

    /**
     * Get nrocliente
     *
     * @return string 
     */
    public function getNrocliente()
    {
        return $this->nrocliente;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Vehiculos
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Vehiculos
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Vehiculos
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
     * Set patente
     *
     * @param string $patente
     * @return Vehiculos
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string 
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set datoadic1
     *
     * @param string $datoadic1
     * @return Vehiculos
     */
    public function setDatoadic1($datoadic1)
    {
        $this->datoadic1 = $datoadic1;

        return $this;
    }

    /**
     * Get datoadic1
     *
     * @return string 
     */
    public function getDatoadic1()
    {
        return $this->datoadic1;
    }

    /**
     * Set datoadic2
     *
     * @param string $datoadic2
     * @return Vehiculos
     */
    public function setDatoadic2($datoadic2)
    {
        $this->datoadic2 = $datoadic2;

        return $this;
    }

    /**
     * Get datoadic2
     *
     * @return string 
     */
    public function getDatoadic2()
    {
        return $this->datoadic2;
    }

    /**
     * Set recuperar
     *
     * @param integer $recuperar
     * @return Vehiculos
     */
    public function setRecuperar($recuperar)
    {
        $this->recuperar = $recuperar;

        return $this;
    }

    /**
     * Get recuperar
     *
     * @return integer 
     */
    public function getRecuperar()
    {
        return $this->recuperar;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Vehiculos
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
