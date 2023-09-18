<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediospago
 *
 * @ORM\Table(name="mediospago")
 * @ORM\Entity
 */
class Mediospago
{
    /**
     * @var string
     *
     * @ORM\Column(name="idmedio", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcioninterna", type="string", length=50, nullable=true)
     */
    private $descripcioninterna;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=100, nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="codigodecidir", type="string", length=2, nullable=true)
     */
    private $codigodecidir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitable", type="boolean", nullable=true)
     */
    private $habilitable;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_archivo", type="string", length=50, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigows", type="string", length=10, nullable=true)
     */
    private $codigows;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo", type="integer", nullable=true)
     */
    private $idtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoapi", type="string", length=20, nullable=true)
     */
    private $codigoapi;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="idmedio_nuevo", type="string", length=30, nullable=true)
     */
    private $idmedioNuevo;



    /**
     * Get idmedio
     *
     * @return string 
     */
    public function getIdmedio()
    {
        return $this->idmedio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Mediospago
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
     * Set descripcioninterna
     *
     * @param string $descripcioninterna
     * @return Mediospago
     */
    public function setDescripcioninterna($descripcioninterna)
    {
        $this->descripcioninterna = $descripcioninterna;

        return $this;
    }

    /**
     * Get descripcioninterna
     *
     * @return string 
     */
    public function getDescripcioninterna()
    {
        return $this->descripcioninterna;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Mediospago
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set codigodecidir
     *
     * @param string $codigodecidir
     * @return Mediospago
     */
    public function setCodigodecidir($codigodecidir)
    {
        $this->codigodecidir = $codigodecidir;

        return $this;
    }

    /**
     * Get codigodecidir
     *
     * @return string 
     */
    public function getCodigodecidir()
    {
        return $this->codigodecidir;
    }

    /**
     * Set habilitable
     *
     * @param boolean $habilitable
     * @return Mediospago
     */
    public function setHabilitable($habilitable)
    {
        $this->habilitable = $habilitable;

        return $this;
    }

    /**
     * Get habilitable
     *
     * @return boolean 
     */
    public function getHabilitable()
    {
        return $this->habilitable;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return Mediospago
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set codigows
     *
     * @param string $codigows
     * @return Mediospago
     */
    public function setCodigows($codigows)
    {
        $this->codigows = $codigows;

        return $this;
    }

    /**
     * Get codigows
     *
     * @return string 
     */
    public function getCodigows()
    {
        return $this->codigows;
    }

    /**
     * Set idtipo
     *
     * @param integer $idtipo
     * @return Mediospago
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return integer 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set codigoapi
     *
     * @param string $codigoapi
     * @return Mediospago
     */
    public function setCodigoapi($codigoapi)
    {
        $this->codigoapi = $codigoapi;

        return $this;
    }

    /**
     * Get codigoapi
     *
     * @return string 
     */
    public function getCodigoapi()
    {
        return $this->codigoapi;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Mediospago
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idmedioNuevo
     *
     * @param string $idmedioNuevo
     * @return Mediospago
     */
    public function setIdmedioNuevo($idmedioNuevo)
    {
        $this->idmedioNuevo = $idmedioNuevo;

        return $this;
    }

    /**
     * Get idmedioNuevo
     *
     * @return string 
     */
    public function getIdmedioNuevo()
    {
        return $this->idmedioNuevo;
    }
}
