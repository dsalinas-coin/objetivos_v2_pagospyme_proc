<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClientesTarifas extends \AppBundle\Entity\ClientesTarifas implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idtarifa', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idconcepto', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'ultimamodificacion', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'valor', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'comentario', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechacreacion', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechavencimiento', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'valorpordefecto', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechaperiododesde', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechaperiodohasta');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idtarifa', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'idconcepto', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'ultimamodificacion', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'valor', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'comentario', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechacreacion', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechavencimiento', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'valorpordefecto', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechaperiododesde', '' . "\0" . 'AppBundle\\Entity\\ClientesTarifas' . "\0" . 'fechaperiodohasta');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClientesTarifas $proxy) {
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
    public function getIdtarifa()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtarifa();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtarifa', array());

        return parent::getIdtarifa();
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
    public function setUltimamodificacion($ultimamodificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltimamodificacion', array($ultimamodificacion));

        return parent::setUltimamodificacion($ultimamodificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltimamodificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltimamodificacion', array());

        return parent::getUltimamodificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setValor($valor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValor', array($valor));

        return parent::setValor($valor);
    }

    /**
     * {@inheritDoc}
     */
    public function getValor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValor', array());

        return parent::getValor();
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
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', array($comentario));

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', array());

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechacreacion($fechacreacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechacreacion', array($fechacreacion));

        return parent::setFechacreacion($fechacreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechacreacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechacreacion', array());

        return parent::getFechacreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechavencimiento($fechavencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechavencimiento', array($fechavencimiento));

        return parent::setFechavencimiento($fechavencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechavencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechavencimiento', array());

        return parent::getFechavencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorpordefecto($valorpordefecto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorpordefecto', array($valorpordefecto));

        return parent::setValorpordefecto($valorpordefecto);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorpordefecto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorpordefecto', array());

        return parent::getValorpordefecto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaperiododesde($fechaperiododesde)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaperiododesde', array($fechaperiododesde));

        return parent::setFechaperiododesde($fechaperiododesde);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaperiododesde()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaperiododesde', array());

        return parent::getFechaperiododesde();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaperiodohasta($fechaperiodohasta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaperiodohasta', array($fechaperiodohasta));

        return parent::setFechaperiodohasta($fechaperiodohasta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaperiodohasta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaperiodohasta', array());

        return parent::getFechaperiodohasta();
    }

}
