<?php

namespace AppBundle\Model;
/**
 * Created by PhpStorm.
 * User: mtejada
 * Date: 24/9/2018
 * Time: 1:42 p.m.
 */
class Registro10Header
{
    private $cuit="33714189919";//parameters.yml o bbdd?
    private $tipoDoc="CUIT";
    private $moneda="0"; //entiendo que es pesos siempre, entonces fijo?
    private $importeTotal=0.0; //se van a ir sumando las ordenes
    private $formaPago="AB";
    private $disponPago="2"; // "Puede ser 2 si la forma de pago es AB"
    private $fechaEmision;
    private $entidad="0017";
    private $sucCuentaDebito="0005";//parameters.yml o bbdd? REVISAR, no lo tengo!padeado a 4
    private $dvCuentaDebito="03";//parameters.yml o bbdd? REVISAR, no lo tengo! padeado a 2
    private $tipoCuentaDebito="01";// fijo CUENTA CORRIENTE?
    private $monedaCuentaDebito="0"; //entiendo que es pesos siempre, entonces fijo?
    private $nroCuentaDebito="0267916";//parameters.yml o bbdd?REVISAR, no lo tengo! padeado a 2
    private $cantidad;

    /**
     * @return mixed
     */ 
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * @param mixed $cuit
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
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
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * @param string $moneda
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    }

    /**
     * @return float
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }

    /**
     * @param float $importeTotal
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;
    }

    /**
     * @return string
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * @param string $formaPago
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;
    }

    /**
     * @return string
     */
    public function getDisponPago()
    {
        return $this->disponPago;
    }

    /**
     * @param string $disponPago
     */
    public function setDisponPago($disponPago)
    {
        $this->disponPago = $disponPago;
    }

    /**
     * @return mixed
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * @param mixed $fechaEmision
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;
    }

    /**
     * @return string
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * @param string $entidad
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;
    }

    /**
     * @return mixed
     */
    public function getSucCuentaDebito()
    {
        return $this->sucCuentaDebito;
    }

    /**
     * @param mixed $sucCuentaDebito
     */
    public function setSucCuentaDebito($sucCuentaDebito)
    {
        $this->sucCuentaDebito = $sucCuentaDebito;
    }

    /**
     * @return mixed
     */
    public function getDvCuentaDebito()
    {
        return $this->dvCuentaDebito;
    }

    /**
     * @param mixed $dvCuentaDebito
     */
    public function setDvCuentaDebito($dvCuentaDebito)
    {
        $this->dvCuentaDebito = $dvCuentaDebito;
    }

    /**
     * @return string
     */
    public function getTipoCuentaDebito()
    {
        return $this->tipoCuentaDebito;
    }

    /**
     * @param string $tipoCuentaDebito
     */
    public function setTipoCuentaDebito($tipoCuentaDebito)
    {
        $this->tipoCuentaDebito = $tipoCuentaDebito;
    }

    /**
     * @return string
     */
    public function getMonedaCuentaDebito()
    {
        return $this->monedaCuentaDebito;
    }

    /**
     * @param string $monedaCuentaDebito
     */
    public function setMonedaCuentaDebito($monedaCuentaDebito)
    {
        $this->monedaCuentaDebito = $monedaCuentaDebito;
    }

    /**
     * @return mixed
     */
    public function getNroCuentaDebito()
    {
        return $this->nroCuentaDebito;
    }

    /**
     * @param mixed $nroCuentaDebito
     */
    public function setNroCuentaDebito($nroCuentaDebito)
    {
        $this->nroCuentaDebito = $nroCuentaDebito;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }






}