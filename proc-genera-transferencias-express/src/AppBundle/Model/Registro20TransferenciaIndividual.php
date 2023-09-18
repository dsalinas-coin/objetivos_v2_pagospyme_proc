<?php

namespace AppBundle\Model;
/**
 * Created by PhpStorm.
 * User: mtejada
 * Date: 24/9/2018
 * Time: 1:42 p.m.
 */
class Registro20TransferenciaIndividual
{
    private $cuitCliente="";
    private $nroSecuencia="";
    private $nroSecuenciaOP="";
    private $importe=0;
    private $esClienteAjeno=false;// "S" si es de otro banco y hay que detalles en registros 90, si es del mismo banco, poner vacío
    private $detalleProveedor;
    public function __construct($cuitCliente,$nroSecuencia,$importe,$esClienteAjeno,$nroSecuenciaOP)
    {
        $this->cuitCliente=$cuitCliente;
        $this->nroSecuencia=$nroSecuencia;
        $this->importe=$importe;
        $this->esClienteAjeno=$esClienteAjeno;
        $this->nroSecuenciaOP=$nroSecuenciaOP;

    }

    /**
     * @param $cuitCliente
     * @param $nroSecuencia
     * @param $nombreArchivo
     * @param $nroBeneficiario
     * @param $tipoDoc
     * @param $denProveedor
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
    public function setDetalleProveedor($cuitCliente, $nroSecuencia, $nombreArchivo, $nroBeneficiario, $tipoDoc, $denProveedor, $cbu, $iibb, $calle, $numeroCalle, $nroDepto, $pisoDepto, $localidad, $codPostal, $provincia, $pais, $email){
        $this->detalleProveedor=new Registro90DetalleProveedor($cuitCliente, $nroSecuencia, $nombreArchivo, $nroBeneficiario, $tipoDoc, $denProveedor, $cbu, $iibb, $calle, $numeroCalle, $nroDepto, $pisoDepto, $localidad, $codPostal, $provincia, $pais, $email);

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
    public function getNroSecuenciaOP()
    {
        return $this->nroSecuenciaOP;
    }

    /**
     * @param string $nroSecuencia
     */
    public function setNroSecuenciaOP($nroSecuencia)
    {
        $this->nroSecuenciaOP = $nroSecuencia;
    }

    /**
     * @return int
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * @param int $importe
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    /**
     * @return boolean
     */
    public function getEsClienteAjeno()
    {
        return $this->esClienteAjeno;
    }

    /**
     * @param boolean $esClienteAjeno
     */
    public function setEsClienteAjeno($esClienteAjeno)
    {
        $this->esClienteAjeno = $esClienteAjeno;
    }

    /**
     * @return Registro90DetalleProveedor
     */
    public function getDetalleProveedor()
    {
        return $this->detalleProveedor;
    }




}