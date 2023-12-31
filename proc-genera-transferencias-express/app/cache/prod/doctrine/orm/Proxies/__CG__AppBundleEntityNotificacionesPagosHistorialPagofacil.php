<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NotificacionesPagosHistorialPagofacil extends \AppBundle\Entity\NotificacionesPagosHistorialPagofacil implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'idnotificacionPf', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'codigoBarras', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'tipoDocumento', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroDocumento', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroUsuario', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'moneda', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'terminal', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroTransaccion', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'fechaProcesoPf', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'idnotificacion');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'idnotificacionPf', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'codigoBarras', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'tipoDocumento', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroDocumento', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroUsuario', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'moneda', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'terminal', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'numeroTransaccion', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'fechaProcesoPf', '' . "\0" . 'AppBundle\\Entity\\NotificacionesPagosHistorialPagofacil' . "\0" . 'idnotificacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NotificacionesPagosHistorialPagofacil $proxy) {
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
    public function getIdnotificacionPf()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdnotificacionPf();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdnotificacionPf', array());

        return parent::getIdnotificacionPf();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoBarras($codigoBarras)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoBarras', array($codigoBarras));

        return parent::setCodigoBarras($codigoBarras);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoBarras()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoBarras', array());

        return parent::getCodigoBarras();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoDocumento($tipoDocumento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDocumento', array($tipoDocumento));

        return parent::setTipoDocumento($tipoDocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDocumento', array());

        return parent::getTipoDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroDocumento($numeroDocumento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroDocumento', array($numeroDocumento));

        return parent::setNumeroDocumento($numeroDocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroDocumento', array());

        return parent::getNumeroDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroUsuario($numeroUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroUsuario', array($numeroUsuario));

        return parent::setNumeroUsuario($numeroUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroUsuario', array());

        return parent::getNumeroUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoneda($moneda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoneda', array($moneda));

        return parent::setMoneda($moneda);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoneda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoneda', array());

        return parent::getMoneda();
    }

    /**
     * {@inheritDoc}
     */
    public function setTerminal($terminal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTerminal', array($terminal));

        return parent::setTerminal($terminal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTerminal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTerminal', array());

        return parent::getTerminal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroTransaccion($numeroTransaccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroTransaccion', array($numeroTransaccion));

        return parent::setNumeroTransaccion($numeroTransaccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroTransaccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroTransaccion', array());

        return parent::getNumeroTransaccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaProcesoPf($fechaProcesoPf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaProcesoPf', array($fechaProcesoPf));

        return parent::setFechaProcesoPf($fechaProcesoPf);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaProcesoPf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaProcesoPf', array());

        return parent::getFechaProcesoPf();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdnotificacion(\AppBundle\Entity\NotificacionesPagosHistorial $idnotificacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdnotificacion', array($idnotificacion));

        return parent::setIdnotificacion($idnotificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdnotificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdnotificacion', array());

        return parent::getIdnotificacion();
    }

}
