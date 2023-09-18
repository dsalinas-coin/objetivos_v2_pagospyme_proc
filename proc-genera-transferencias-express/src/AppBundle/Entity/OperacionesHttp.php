<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperacionesHttp
 *
 * @ORM\Table(name="operaciones_http", indexes={@ORM\Index(name="idx_idcliente", columns={"idcliente"}), @ORM\Index(name="NonClusteredIndex-20130225-150237", columns={"idcupon_generado"}), @ORM\Index(name="NonClusteredIndex-20161031-145937", columns={"fecha"})})
 * @ORM\Entity
 */
class OperacionesHttp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idoperacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="remoteip", type="string", length=16, nullable=true)
     */
    private $remoteip;

    /**
     * @var string
     *
     * @ORM\Column(name="urlreferer", type="string", length=500, nullable=true)
     */
    private $urlreferer;

    /**
     * @var string
     *
     * @ORM\Column(name="codcomercio", type="string", length=8, nullable=true)
     */
    private $codcomercio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="codoperacion", type="string", length=20, nullable=true)
     */
    private $codoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="param_enviados", type="string", length=3000, nullable=true)
     */
    private $paramEnviados;

    /**
     * @var string
     *
     * @ORM\Column(name="param_generales", type="string", length=200, nullable=true)
     */
    private $paramGenerales;

    /**
     * @var string
     *
     * @ORM\Column(name="param_usuario", type="string", length=1000, nullable=true)
     */
    private $paramUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="param_documento", type="string", length=700, nullable=true)
     */
    private $paramDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="param_cupon", type="string", length=200, nullable=true)
     */
    private $paramCupon;

    /**
     * @var string
     *
     * @ORM\Column(name="param_desconocidos", type="string", length=2000, nullable=true)
     */
    private $paramDesconocidos;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_usuario", type="string", length=200, nullable=true)
     */
    private $resultadoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_documento", type="string", length=200, nullable=true)
     */
    private $resultadoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_cupon", type="string", length=200, nullable=true)
     */
    private $resultadoCupon;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_devuelto", type="string", length=300, nullable=true)
     */
    private $resultadoDevuelto;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta_urlresultado", type="text", length=-1, nullable=true)
     */
    private $respuestaUrlresultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcupon_generado", type="integer", nullable=true)
     */
    private $idcuponGenerado;



    /**
     * Get idoperacion
     *
     * @return integer 
     */
    public function getIdoperacion()
    {
        return $this->idoperacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OperacionesHttp
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
     * Set remoteip
     *
     * @param string $remoteip
     * @return OperacionesHttp
     */
    public function setRemoteip($remoteip)
    {
        $this->remoteip = $remoteip;

        return $this;
    }

    /**
     * Get remoteip
     *
     * @return string 
     */
    public function getRemoteip()
    {
        return $this->remoteip;
    }

    /**
     * Set urlreferer
     *
     * @param string $urlreferer
     * @return OperacionesHttp
     */
    public function setUrlreferer($urlreferer)
    {
        $this->urlreferer = $urlreferer;

        return $this;
    }

    /**
     * Get urlreferer
     *
     * @return string 
     */
    public function getUrlreferer()
    {
        return $this->urlreferer;
    }

    /**
     * Set codcomercio
     *
     * @param string $codcomercio
     * @return OperacionesHttp
     */
    public function setCodcomercio($codcomercio)
    {
        $this->codcomercio = $codcomercio;

        return $this;
    }

    /**
     * Get codcomercio
     *
     * @return string 
     */
    public function getCodcomercio()
    {
        return $this->codcomercio;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return OperacionesHttp
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set codoperacion
     *
     * @param string $codoperacion
     * @return OperacionesHttp
     */
    public function setCodoperacion($codoperacion)
    {
        $this->codoperacion = $codoperacion;

        return $this;
    }

    /**
     * Get codoperacion
     *
     * @return string 
     */
    public function getCodoperacion()
    {
        return $this->codoperacion;
    }

    /**
     * Set paramEnviados
     *
     * @param string $paramEnviados
     * @return OperacionesHttp
     */
    public function setParamEnviados($paramEnviados)
    {
        $this->paramEnviados = $paramEnviados;

        return $this;
    }

    /**
     * Get paramEnviados
     *
     * @return string 
     */
    public function getParamEnviados()
    {
        return $this->paramEnviados;
    }

    /**
     * Set paramGenerales
     *
     * @param string $paramGenerales
     * @return OperacionesHttp
     */
    public function setParamGenerales($paramGenerales)
    {
        $this->paramGenerales = $paramGenerales;

        return $this;
    }

    /**
     * Get paramGenerales
     *
     * @return string 
     */
    public function getParamGenerales()
    {
        return $this->paramGenerales;
    }

    /**
     * Set paramUsuario
     *
     * @param string $paramUsuario
     * @return OperacionesHttp
     */
    public function setParamUsuario($paramUsuario)
    {
        $this->paramUsuario = $paramUsuario;

        return $this;
    }

    /**
     * Get paramUsuario
     *
     * @return string 
     */
    public function getParamUsuario()
    {
        return $this->paramUsuario;
    }

    /**
     * Set paramDocumento
     *
     * @param string $paramDocumento
     * @return OperacionesHttp
     */
    public function setParamDocumento($paramDocumento)
    {
        $this->paramDocumento = $paramDocumento;

        return $this;
    }

    /**
     * Get paramDocumento
     *
     * @return string 
     */
    public function getParamDocumento()
    {
        return $this->paramDocumento;
    }

    /**
     * Set paramCupon
     *
     * @param string $paramCupon
     * @return OperacionesHttp
     */
    public function setParamCupon($paramCupon)
    {
        $this->paramCupon = $paramCupon;

        return $this;
    }

    /**
     * Get paramCupon
     *
     * @return string 
     */
    public function getParamCupon()
    {
        return $this->paramCupon;
    }

    /**
     * Set paramDesconocidos
     *
     * @param string $paramDesconocidos
     * @return OperacionesHttp
     */
    public function setParamDesconocidos($paramDesconocidos)
    {
        $this->paramDesconocidos = $paramDesconocidos;

        return $this;
    }

    /**
     * Get paramDesconocidos
     *
     * @return string 
     */
    public function getParamDesconocidos()
    {
        return $this->paramDesconocidos;
    }

    /**
     * Set resultadoUsuario
     *
     * @param string $resultadoUsuario
     * @return OperacionesHttp
     */
    public function setResultadoUsuario($resultadoUsuario)
    {
        $this->resultadoUsuario = $resultadoUsuario;

        return $this;
    }

    /**
     * Get resultadoUsuario
     *
     * @return string 
     */
    public function getResultadoUsuario()
    {
        return $this->resultadoUsuario;
    }

    /**
     * Set resultadoDocumento
     *
     * @param string $resultadoDocumento
     * @return OperacionesHttp
     */
    public function setResultadoDocumento($resultadoDocumento)
    {
        $this->resultadoDocumento = $resultadoDocumento;

        return $this;
    }

    /**
     * Get resultadoDocumento
     *
     * @return string 
     */
    public function getResultadoDocumento()
    {
        return $this->resultadoDocumento;
    }

    /**
     * Set resultadoCupon
     *
     * @param string $resultadoCupon
     * @return OperacionesHttp
     */
    public function setResultadoCupon($resultadoCupon)
    {
        $this->resultadoCupon = $resultadoCupon;

        return $this;
    }

    /**
     * Get resultadoCupon
     *
     * @return string 
     */
    public function getResultadoCupon()
    {
        return $this->resultadoCupon;
    }

    /**
     * Set resultadoDevuelto
     *
     * @param string $resultadoDevuelto
     * @return OperacionesHttp
     */
    public function setResultadoDevuelto($resultadoDevuelto)
    {
        $this->resultadoDevuelto = $resultadoDevuelto;

        return $this;
    }

    /**
     * Get resultadoDevuelto
     *
     * @return string 
     */
    public function getResultadoDevuelto()
    {
        return $this->resultadoDevuelto;
    }

    /**
     * Set respuestaUrlresultado
     *
     * @param string $respuestaUrlresultado
     * @return OperacionesHttp
     */
    public function setRespuestaUrlresultado($respuestaUrlresultado)
    {
        $this->respuestaUrlresultado = $respuestaUrlresultado;

        return $this;
    }

    /**
     * Get respuestaUrlresultado
     *
     * @return string 
     */
    public function getRespuestaUrlresultado()
    {
        return $this->respuestaUrlresultado;
    }

    /**
     * Set idcuponGenerado
     *
     * @param integer $idcuponGenerado
     * @return OperacionesHttp
     */
    public function setIdcuponGenerado($idcuponGenerado)
    {
        $this->idcuponGenerado = $idcuponGenerado;

        return $this;
    }

    /**
     * Get idcuponGenerado
     *
     * @return integer 
     */
    public function getIdcuponGenerado()
    {
        return $this->idcuponGenerado;
    }
}
