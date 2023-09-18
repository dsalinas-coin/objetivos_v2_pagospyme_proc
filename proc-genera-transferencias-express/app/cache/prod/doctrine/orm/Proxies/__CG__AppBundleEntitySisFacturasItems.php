<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SisFacturasItems extends \AppBundle\Entity\SisFacturasItems implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'iditem', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'idfactura', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'idconcepto', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'cantidad', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'pbrutoUnitario', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'total', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'pnetoUnitario', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'totalNeto');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'iditem', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'idfactura', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'idconcepto', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'cantidad', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'pbrutoUnitario', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'total', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'pnetoUnitario', '' . "\0" . 'AppBundle\\Entity\\SisFacturasItems' . "\0" . 'totalNeto');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SisFacturasItems $proxy) {
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
    public function getIditem()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIditem();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIditem', array());

        return parent::getIditem();
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
    public function setIdconcepto($idconcepto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdconcepto', array($idconcepto));

        return parent::setIdconcepto($idconcepto);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdconcepto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdconcepto', array());

        return parent::getIdconcepto();
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
    public function setPbrutoUnitario($pbrutoUnitario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPbrutoUnitario', array($pbrutoUnitario));

        return parent::setPbrutoUnitario($pbrutoUnitario);
    }

    /**
     * {@inheritDoc}
     */
    public function getPbrutoUnitario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPbrutoUnitario', array());

        return parent::getPbrutoUnitario();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', array($total));

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array());

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPnetoUnitario($pnetoUnitario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPnetoUnitario', array($pnetoUnitario));

        return parent::setPnetoUnitario($pnetoUnitario);
    }

    /**
     * {@inheritDoc}
     */
    public function getPnetoUnitario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPnetoUnitario', array());

        return parent::getPnetoUnitario();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalNeto($totalNeto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalNeto', array($totalNeto));

        return parent::setTotalNeto($totalNeto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalNeto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalNeto', array());

        return parent::getTotalNeto();
    }

}
