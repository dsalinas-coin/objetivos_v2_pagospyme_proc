<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Smsdbtemp extends \AppBundle\Entity\Smsdbtemp implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idsms', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'numcliente', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'nrodocumento', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'digito', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'fechaenviado', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'smsenviado', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idsender');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idsms', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'numcliente', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'nrodocumento', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'digito', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'fechaenviado', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'smsenviado', '' . "\0" . 'AppBundle\\Entity\\Smsdbtemp' . "\0" . 'idsender');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Smsdbtemp $proxy) {
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
    public function getIdsms()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdsms();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsms', array());

        return parent::getIdsms();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdservicio($idservicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdservicio', array($idservicio));

        return parent::setIdservicio($idservicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdservicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdservicio', array());

        return parent::getIdservicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaingreso($fechaingreso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaingreso', array($fechaingreso));

        return parent::setFechaingreso($fechaingreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaingreso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaingreso', array());

        return parent::getFechaingreso();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumcliente($numcliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumcliente', array($numcliente));

        return parent::setNumcliente($numcliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumcliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumcliente', array());

        return parent::getNumcliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporte($importe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporte', array($importe));

        return parent::setImporte($importe);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporte', array());

        return parent::getImporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setNrodocumento($nrodocumento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNrodocumento', array($nrodocumento));

        return parent::setNrodocumento($nrodocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getNrodocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNrodocumento', array());

        return parent::getNrodocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDigito($digito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDigito', array($digito));

        return parent::setDigito($digito);
    }

    /**
     * {@inheritDoc}
     */
    public function getDigito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDigito', array());

        return parent::getDigito();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaenviado($fechaenviado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaenviado', array($fechaenviado));

        return parent::setFechaenviado($fechaenviado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaenviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaenviado', array());

        return parent::getFechaenviado();
    }

    /**
     * {@inheritDoc}
     */
    public function setSmsenviado($smsenviado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSmsenviado', array($smsenviado));

        return parent::setSmsenviado($smsenviado);
    }

    /**
     * {@inheritDoc}
     */
    public function getSmsenviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSmsenviado', array());

        return parent::getSmsenviado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdsender($idsender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdsender', array($idsender));

        return parent::setIdsender($idsender);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdsender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsender', array());

        return parent::getIdsender();
    }

}
