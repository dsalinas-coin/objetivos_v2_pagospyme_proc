<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PagofacilCuponeras extends \AppBundle\Entity\PagofacilCuponeras implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idcuponera', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'fechaGeneracion', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'cantCuotas', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'importeTotal', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'ruta', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idtipogeneracion', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'fechaDesactivacion');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idcuponera', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'fechaGeneracion', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'cantCuotas', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'importeTotal', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'ruta', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'idtipogeneracion', '' . "\0" . 'AppBundle\\Entity\\PagofacilCuponeras' . "\0" . 'fechaDesactivacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PagofacilCuponeras $proxy) {
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
    public function getIdcuponera()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcuponera();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcuponera', array());

        return parent::getIdcuponera();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaGeneracion($fechaGeneracion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaGeneracion', array($fechaGeneracion));

        return parent::setFechaGeneracion($fechaGeneracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaGeneracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaGeneracion', array());

        return parent::getFechaGeneracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcliente($idcliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcliente', array($idcliente));

        return parent::setIdcliente($idcliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcliente', array());

        return parent::getIdcliente();
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
    public function setCantCuotas($cantCuotas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantCuotas', array($cantCuotas));

        return parent::setCantCuotas($cantCuotas);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantCuotas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantCuotas', array());

        return parent::getCantCuotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporteTotal($importeTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporteTotal', array($importeTotal));

        return parent::setImporteTotal($importeTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporteTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporteTotal', array());

        return parent::getImporteTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuta($ruta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuta', array($ruta));

        return parent::setRuta($ruta);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuta', array());

        return parent::getRuta();
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
    public function setIdtipogeneracion($idtipogeneracion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtipogeneracion', array($idtipogeneracion));

        return parent::setIdtipogeneracion($idtipogeneracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipogeneracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipogeneracion', array());

        return parent::getIdtipogeneracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaDesactivacion($fechaDesactivacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaDesactivacion', array($fechaDesactivacion));

        return parent::setFechaDesactivacion($fechaDesactivacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaDesactivacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaDesactivacion', array());

        return parent::getFechaDesactivacion();
    }

}
