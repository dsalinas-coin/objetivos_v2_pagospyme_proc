<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PagofacilTransferenciasDet extends \AppBundle\Entity\PagofacilTransferenciasDet implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'iddetalle', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idtransferencia', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'fechapago', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idzona', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idcategoria', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'cantidad', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'retencionEnviada', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'importe');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'iddetalle', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idtransferencia', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'fechapago', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idzona', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'idcategoria', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'cantidad', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'retencionEnviada', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferenciasDet' . "\0" . 'importe');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PagofacilTransferenciasDet $proxy) {
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
    public function getRetencionEnviada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetencionEnviada', array());

        return parent::getRetencionEnviada();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetencionEnviada($retencionEnviada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetencionEnviada', array($retencionEnviada));

        return parent::setRetencionEnviada($retencionEnviada);
    }

    /**
     * {@inheritDoc}
     */
    public function getIddetalle()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIddetalle();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIddetalle', array());

        return parent::getIddetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtransferencia($idtransferencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtransferencia', array($idtransferencia));

        return parent::setIdtransferencia($idtransferencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtransferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtransferencia', array());

        return parent::getIdtransferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechapago($fechapago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechapago', array($fechapago));

        return parent::setFechapago($fechapago);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechapago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechapago', array());

        return parent::getFechapago();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdzona($idzona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdzona', array($idzona));

        return parent::setIdzona($idzona);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdzona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdzona', array());

        return parent::getIdzona();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcategoria($idcategoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcategoria', array($idcategoria));

        return parent::setIdcategoria($idcategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcategoria', array());

        return parent::getIdcategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidad($cantidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidad', array($cantidad));

        return parent::setCantidad($cantidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidad', array());

        return parent::getCantidad();
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

}
