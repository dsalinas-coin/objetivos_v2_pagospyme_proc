<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SmsRecibidos extends \AppBundle\Entity\SmsRecibidos implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idsms', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'remitente', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'texto', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'fecharecibido', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idsesion');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idsms', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'remitente', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'texto', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'fecharecibido', '' . "\0" . 'AppBundle\\Entity\\SmsRecibidos' . "\0" . 'idsesion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SmsRecibidos $proxy) {
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
    public function setRemitente($remitente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemitente', array($remitente));

        return parent::setRemitente($remitente);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemitente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemitente', array());

        return parent::getRemitente();
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
    public function setTexto($texto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexto', array($texto));

        return parent::setTexto($texto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTexto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexto', array());

        return parent::getTexto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecharecibido($fecharecibido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecharecibido', array($fecharecibido));

        return parent::setFecharecibido($fecharecibido);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecharecibido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecharecibido', array());

        return parent::getFecharecibido();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdsesion($idsesion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdsesion', array($idsesion));

        return parent::setIdsesion($idsesion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdsesion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsesion', array());

        return parent::getIdsesion();
    }

}
