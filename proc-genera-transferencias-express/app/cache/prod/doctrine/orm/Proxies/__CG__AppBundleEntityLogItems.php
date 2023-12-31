<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LogItems extends \AppBundle\Entity\LogItems implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idlog', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idoperacion', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idproceso', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idtipo', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idfactura', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcobro', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idnotacredito', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcobroFail', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'estado');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idlog', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idoperacion', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idproceso', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idtipo', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idfactura', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcobro', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idnotacredito', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'idcobroFail', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\LogItems' . "\0" . 'estado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LogItems $proxy) {
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
    public function getIdlog()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getIdlog();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdlog', array());

        return parent::getIdlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdoperacion($idoperacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdoperacion', array($idoperacion));

        return parent::setIdoperacion($idoperacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdoperacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdoperacion', array());

        return parent::getIdoperacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdproceso($idproceso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdproceso', array($idproceso));

        return parent::setIdproceso($idproceso);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdproceso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdproceso', array());

        return parent::getIdproceso();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtipo($idtipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtipo', array($idtipo));

        return parent::setIdtipo($idtipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipo', array());

        return parent::getIdtipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
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
    public function setIdusuario($idusuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdusuario', array($idusuario));

        return parent::setIdusuario($idusuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdusuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdusuario', array());

        return parent::getIdusuario();
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
    public function setIdfactura($idfactura)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdfactura', array($idfactura));

        return parent::setIdfactura($idfactura);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdfactura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfactura', array());

        return parent::getIdfactura();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcobro($idcobro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcobro', array($idcobro));

        return parent::setIdcobro($idcobro);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcobro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcobro', array());

        return parent::getIdcobro();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdnotacredito($idnotacredito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdnotacredito', array($idnotacredito));

        return parent::setIdnotacredito($idnotacredito);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdnotacredito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdnotacredito', array());

        return parent::getIdnotacredito();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcobroFail($idcobroFail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcobroFail', array($idcobroFail));

        return parent::setIdcobroFail($idcobroFail);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcobroFail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcobroFail', array());

        return parent::getIdcobroFail();
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

}
