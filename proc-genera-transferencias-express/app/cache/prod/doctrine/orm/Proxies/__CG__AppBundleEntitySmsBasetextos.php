<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SmsBasetextos extends \AppBundle\Entity\SmsBasetextos implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'idtexto', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'etapa', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'textoconsulta', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'textorespuesta', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'iretapa', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'estado');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'idtexto', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'etapa', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'textoconsulta', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'textorespuesta', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'iretapa', '' . "\0" . 'AppBundle\\Entity\\SmsBasetextos' . "\0" . 'estado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SmsBasetextos $proxy) {
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
    public function getIdtexto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtexto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtexto', array());

        return parent::getIdtexto();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtapa($etapa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtapa', array($etapa));

        return parent::setEtapa($etapa);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtapa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtapa', array());

        return parent::getEtapa();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextoconsulta($textoconsulta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextoconsulta', array($textoconsulta));

        return parent::setTextoconsulta($textoconsulta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextoconsulta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextoconsulta', array());

        return parent::getTextoconsulta();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextorespuesta($textorespuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextorespuesta', array($textorespuesta));

        return parent::setTextorespuesta($textorespuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextorespuesta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextorespuesta', array());

        return parent::getTextorespuesta();
    }

    /**
     * {@inheritDoc}
     */
    public function setIretapa($iretapa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIretapa', array($iretapa));

        return parent::setIretapa($iretapa);
    }

    /**
     * {@inheritDoc}
     */
    public function getIretapa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIretapa', array());

        return parent::getIretapa();
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