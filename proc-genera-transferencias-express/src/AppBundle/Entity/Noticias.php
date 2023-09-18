<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticias
 *
 * @ORM\Table(name="noticias")
 * @ORM\Entity
 */
class Noticias
{
    /**
     * @var string
     *
     * @ORM\Column(name="idnoticia", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnoticia;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=200, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=1000, nullable=false)
     */
    private $texto;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



    /**
     * Get idnoticia
     *
     * @return string 
     */
    public function getIdnoticia()
    {
        return $this->idnoticia;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Noticias
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Noticias
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Noticias
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Noticias
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
