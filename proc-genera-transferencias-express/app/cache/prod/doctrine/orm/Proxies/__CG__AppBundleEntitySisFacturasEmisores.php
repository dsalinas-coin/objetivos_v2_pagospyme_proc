<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SisFacturasEmisores extends \AppBundle\Entity\SisFacturasEmisores implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'idfacturaEmisor', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'cuit', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'puntoVenta', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'cuitWeb', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'ingresosBrutos', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'inicioActividades', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'iva');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'idfacturaEmisor', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'cuit', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'puntoVenta', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'cuitWeb', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'ingresosBrutos', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'inicioActividades', '' . "\0" . 'AppBundle\\Entity\\SisFacturasEmisores' . "\0" . 'iva');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SisFacturasEmisores $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdfacturaEmisor()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdfacturaEmisor();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfacturaEmisor', array());

        return parent::getIdfacturaEmisor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuit($cuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuit', array($cuit));

        return parent::setCuit($cuit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuit', array());

        return parent::getCuit();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', array($activo));

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', array());

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntoVenta($puntoVenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntoVenta', array($puntoVenta));

        return parent::setPuntoVenta($puntoVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntoVenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntoVenta', array());

        return parent::getPuntoVenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuitWeb($cuitWeb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuitWeb', array($cuitWeb));

        return parent::setCuitWeb($cuitWeb);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuitWeb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuitWeb', array());

        return parent::getCuitWeb();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresosBrutos($ingresosBrutos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresosBrutos', array($ingresosBrutos));

        return parent::setIngresosBrutos($ingresosBrutos);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresosBrutos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresosBrutos', array());

        return parent::getIngresosBrutos();
    }

    /**
     * {@inheritDoc}
     */
    public function setInicioActividades($inicioActividades)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInicioActividades', array($inicioActividades));

        return parent::setInicioActividades($inicioActividades);
    }

    /**
     * {@inheritDoc}
     */
    public function getInicioActividades()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInicioActividades', array());

        return parent::getInicioActividades();
    }

    /**
     * {@inheritDoc}
     */
    public function setIva($iva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIva', array($iva));

        return parent::setIva($iva);
    }

    /**
     * {@inheritDoc}
     */
    public function getIva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIva', array());

        return parent::getIva();
    }

}
