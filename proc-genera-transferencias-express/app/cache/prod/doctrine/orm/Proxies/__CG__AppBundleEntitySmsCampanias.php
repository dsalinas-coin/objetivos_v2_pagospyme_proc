<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SmsCampanias extends \AppBundle\Entity\SmsCampanias implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'idcampania', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechafin', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'activo');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'idcampania', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'fechafin', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\SmsCampanias' . "\0" . 'activo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SmsCampanias $proxy) {
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
    public function getIdcampania()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcampania();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcampania', array());

        return parent::getIdcampania();
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
    public function setFechainicio($fechainicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechainicio', array($fechainicio));

        return parent::setFechainicio($fechainicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechainicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechainicio', array());

        return parent::getFechainicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechafin($fechafin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechafin', array($fechafin));

        return parent::setFechafin($fechafin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechafin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechafin', array());

        return parent::getFechafin();
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

}
