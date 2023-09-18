<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SisTareasDetalles extends \AppBundle\Entity\SisTareasDetalles implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idtareaDetalle', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idtarea', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaestinicio', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechafin', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaestfin', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'progreso', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'orden', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idoperador', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idestado', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'pasounico');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idtareaDetalle', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idtarea', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaestinicio', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechafin', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'fechaestfin', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'progreso', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'observaciones', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'orden', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idoperador', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'idestado', '' . "\0" . 'AppBundle\\Entity\\SisTareasDetalles' . "\0" . 'pasounico');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SisTareasDetalles $proxy) {
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
    public function getIdtareaDetalle()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtareaDetalle();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtareaDetalle', array());

        return parent::getIdtareaDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtarea($idtarea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtarea', array($idtarea));

        return parent::setIdtarea($idtarea);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtarea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtarea', array());

        return parent::getIdtarea();
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
    public function setFechaestinicio($fechaestinicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaestinicio', array($fechaestinicio));

        return parent::setFechaestinicio($fechaestinicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaestinicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaestinicio', array());

        return parent::getFechaestinicio();
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
    public function setFechaestfin($fechaestfin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaestfin', array($fechaestfin));

        return parent::setFechaestfin($fechaestfin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaestfin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaestfin', array());

        return parent::getFechaestfin();
    }

    /**
     * {@inheritDoc}
     */
    public function setProgreso($progreso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProgreso', array($progreso));

        return parent::setProgreso($progreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getProgreso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProgreso', array());

        return parent::getProgreso();
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
    public function setOrden($orden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrden', array($orden));

        return parent::setOrden($orden);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrden', array());

        return parent::getOrden();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdoperador($idoperador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdoperador', array($idoperador));

        return parent::setIdoperador($idoperador);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdoperador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdoperador', array());

        return parent::getIdoperador();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdestado($idestado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdestado', array($idestado));

        return parent::setIdestado($idestado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdestado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdestado', array());

        return parent::getIdestado();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasounico($pasounico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasounico', array($pasounico));

        return parent::setPasounico($pasounico);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasounico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasounico', array());

        return parent::getPasounico();
    }

}
