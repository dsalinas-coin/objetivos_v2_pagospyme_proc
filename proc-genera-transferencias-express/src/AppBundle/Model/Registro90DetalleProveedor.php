<?php

namespace AppBundle\Model;
/**
 * Created by PhpStorm.
 * User: mtejada
 * Date: 24/9/2018
 * Time: 1:42 p.m.
 */
class Registro90DetalleProveedor
{
    private $cuitCliente = "";
    private $nroSecuencia = "";
    private $nombreArchivo="";
    private $nroBeneficiario=""; //que es el numero de beneficiario del proveedor? el idcliente? es interno?
    private $tipoDoc="CUI";
    private $denProveedor=""; //que es la denominación del proveedor?
    private $cbu;
    private $iibb;
    private $calle;
    private $numeroCalle;
    private $nroDepto;
    private $pisoDepto;
    private $localidad;
    private $codPostal;
    private $provincia;
    private $pais;
    private $email;

    /**
     * Registro90DetalleProveedor constructor.
     * @param string $cuitCliente
     * @param string $nroSecuencia
     * @param string $nombreArchivo
     * @param string $nroBeneficiario
     * @param string $tipoDoc
     * @param string $denProveedor
     * @param $cbu
     * @param $iibb
     * @param $calle
     * @param $numeroCalle
     * @param $nroDepto
     * @param $pisoDepto
     * @param $localidad
     * @param $codPostal
     * @param $provincia
     * @param $pais
     * @param $email
     */
    public function __construct($cuitCliente, $nroSecuencia, $nombreArchivo, $nroBeneficiario, $tipoDoc, $denProveedor, $cbu, $iibb, $calle, $numeroCalle, $nroDepto, $pisoDepto, $localidad, $codPostal, $provincia, $pais, $email)
    {
        $this->cuitCliente = $cuitCliente;
        $this->nroSecuencia = $nroSecuencia;
        $this->nombreArchivo = $nombreArchivo;
        $this->nroBeneficiario = $nroBeneficiario;
        $this->tipoDoc = $tipoDoc;
        $this->denProveedor = $denProveedor;
        $this->cbu = $cbu;
        $this->iibb = $iibb;
        $this->calle = $calle;
        $this->numeroCalle = $numeroCalle;
        $this->nroDepto = $nroDepto;
        $this->pisoDepto = $pisoDepto;
        $this->localidad = $localidad;
        $this->codPostal = $codPostal;
        $this->provincia = $provincia;
        $this->pais = $pais;
	//si el mail es de mas de 40 caracteres, le pongo soporte.clientes@pagospyme.com
	if(strlen($email)<40){
	    $this->email = $email;
	}else{
	    $this->email = "soporte.clientes@pagospyme.com";
	}
        
    }

    /**
     * @return string
     */
    public function getCuitCliente()
    {
        return $this->cuitCliente;
    }

    /**
     * @param string $cuitCliente
     */
    public function setCuitCliente($cuitCliente)
    {
        $this->cuitCliente = $cuitCliente;
    }

    /**
     * @return string
     */
    public function getNroSecuencia()
    {
        return $this->nroSecuencia;
    }

    /**
     * @param string $nroSecuencia
     */
    public function setNroSecuencia($nroSecuencia)
    {
        $this->nroSecuencia = $nroSecuencia;
    }

    /**
     * @return string
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * @param string $nombreArchivo
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;
    }

    /**
     * @return string
     */
    public function getNroBeneficiario()
    {
        return $this->nroBeneficiario;
    }

    /**
     * @param string $nroBeneficiario
     */
    public function setNroBeneficiario($nroBeneficiario)
    {
        $this->nroBeneficiario = $nroBeneficiario;
    }

    /**
     * @return string
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * @param string $tipoDoc
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;
    }

    /**
     * @return string
     */
    public function getDenProveedor()
    {
        return $this->denProveedor;
    }

    /**
     * @param string $denProveedor
     */
    public function setDenProveedor($denProveedor)
    {
        $this->denProveedor = $denProveedor;
    }

    /**
     * @return mixed
     */
    public function getCbu()
    {
        return $this->cbu;
    }

    /**
     * @param mixed $cbu
     */
    public function setCbu($cbu)
    {
        $this->cbu = $cbu;
    }

    /**
     * @return mixed
     */
    public function getIibb()
    {
        return $this->iibb;
    }

    /**
     * @param mixed $iibb
     */
    public function setIibb($iibb)
    {
        $this->iibb = $iibb;
    }

    /**
     * @return mixed
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * @param mixed $calle
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

    /**
     * @return mixed
     */
    public function getNumeroCalle()
    {
        return $this->numeroCalle;
    }

    /**
     * @param mixed $numeroCalle
     */
    public function setNumeroCalle($numeroCalle)
    {
        $this->numeroCalle = $numeroCalle;
    }

    /**
     * @return mixed
     */
    public function getNroDepto()
    {
        return $this->nroDepto;
    }

    /**
     * @param mixed $nroDepto
     */
    public function setNroDepto($nroDepto)
    {
        $this->nroDepto = $nroDepto;
    }

    /**
     * @return mixed
     */
    public function getPisoDepto()
    {
        return $this->pisoDepto;
    }

    /**
     * @param mixed $pisoDepto
     */
    public function setPisoDepto($pisoDepto)
    {
        $this->pisoDepto = $pisoDepto;
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    /**
     * @return mixed
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * @param mixed $codPostal
     */
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}