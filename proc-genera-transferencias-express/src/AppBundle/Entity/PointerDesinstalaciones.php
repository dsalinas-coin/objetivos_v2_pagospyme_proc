<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointerDesinstalaciones
 *
 * @ORM\Table(name="pointer_desinstalaciones")
 * @ORM\Entity
 */
class PointerDesinstalaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idturno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idturno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio", type="integer", nullable=true)
     */
    private $idservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcentro", type="integer", nullable=true)
     */
    private $idcentro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="diaturno", type="datetime", nullable=true)
     */
    private $diaturno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idhorario", type="smallint", nullable=true)
     */
    private $idhorario;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;



    /**
     * Get idturno
     *
     * @return integer 
     */
    public function getIdturno()
    {
        return $this->idturno;
    }

    /**
     * Set idservicio
     *
     * @param integer $idservicio
     * @return PointerDesinstalaciones
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
     * Set idcentro
     *
     * @param integer $idcentro
     * @return PointerDesinstalaciones
     */
    public function setIdcentro($idcentro)
    {
        $this->idcentro = $idcentro;

        return $this;
    }

    /**
     * Get idcentro
     *
     * @return integer 
     */
    public function getIdcentro()
    {
        return $this->idcentro;
    }

    /**
     * Set diaturno
     *
     * @param \DateTime $diaturno
     * @return PointerDesinstalaciones
     */
    public function setDiaturno($diaturno)
    {
        $this->diaturno = $diaturno;

        return $this;
    }

    /**
     * Get diaturno
     *
     * @return \DateTime 
     */
    public function getDiaturno()
    {
        return $this->diaturno;
    }

    /**
     * Set idhorario
     *
     * @param integer $idhorario
     * @return PointerDesinstalaciones
     */
    public function setIdhorario($idhorario)
    {
        $this->idhorario = $idhorario;

        return $this;
    }

    /**
     * Get idhorario
     *
     * @return integer 
     */
    public function getIdhorario()
    {
        return $this->idhorario;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return PointerDesinstalaciones
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
     * Set estado
     *
     * @param integer $estado
     * @return PointerDesinstalaciones
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
