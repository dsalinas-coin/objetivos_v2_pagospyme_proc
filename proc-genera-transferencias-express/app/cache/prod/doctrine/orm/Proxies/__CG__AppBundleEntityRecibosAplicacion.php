<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RecibosAplicacion extends \AppBundle\Entity\RecibosAplicacion implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idrecibo', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'fechaaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idtipoaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idasoc');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idrecibo', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'fechaaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idtipoaplicacion', '' . "\0" . 'AppBundle\\Entity\\RecibosAplicacion' . "\0" . 'idasoc');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RecibosAplicacion $proxy) {
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
    public function getIdaplicacion()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdaplicacion();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdaplicacion', array());

        return parent::getIdaplicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdrecibo($idrecibo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdrecibo', array($idrecibo));

        return parent::setIdrecibo($idrecibo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdrecibo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdrecibo', array());

        return parent::getIdrecibo();
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
    public function setFechaaplicacion($fechaaplicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaaplicacion', array($fechaaplicacion));

        return parent::setFechaaplicacion($fechaaplicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaaplicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaaplicacion', array());

        return parent::getFechaaplicacion();
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
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtipoaplicacion($idtipoaplicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtipoaplicacion', array($idtipoaplicacion));

        return parent::setIdtipoaplicacion($idtipoaplicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipoaplicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipoaplicacion', array());

        return parent::getIdtipoaplicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdasoc($idasoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdasoc', array($idasoc));

        return parent::setIdasoc($idasoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdasoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdasoc', array());

        return parent::getIdasoc();
    }

}