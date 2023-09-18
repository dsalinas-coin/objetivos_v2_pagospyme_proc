<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PagofacilTransferencias extends \AppBundle\Entity\PagofacilTransferencias implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idtransferencia', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idtransferenciaTipo', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'nroorden', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'mediopago', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'fechadeposito', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'montototal', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'emailEnviado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'archivoEnviado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'archivoIdreg');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idtransferencia', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'idtransferenciaTipo', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'nroorden', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'mediopago', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'fechadeposito', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'montototal', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'emailEnviado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'archivoEnviado', '' . "\0" . 'AppBundle\\Entity\\PagofacilTransferencias' . "\0" . 'archivoIdreg');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PagofacilTransferencias $proxy) {
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
    public function getArchivoIdreg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivoIdreg', array());

        return parent::getArchivoIdreg();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivoIdreg($arc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivoIdreg', array($arc));

        return parent::setArchivoIdreg($arc);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroorden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroorden', array());

        return parent::getNroorden();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroorden($nroorden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroorden', array($nroorden));

        return parent::setNroorden($nroorden);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediopago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediopago', array());

        return parent::getMediopago();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediopago($mediopago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediopago', array($mediopago));

        return parent::setMediopago($mediopago);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtransferencia()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtransferencia();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtransferencia', array());

        return parent::getIdtransferencia();
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
    public function setIdtransferenciaTipo($idtransferenciaTipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtransferenciaTipo', array($idtransferenciaTipo));

        return parent::setIdtransferenciaTipo($idtransferenciaTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtransferenciaTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtransferenciaTipo', array());

        return parent::getIdtransferenciaTipo();
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
    public function setFechadeposito($fechadeposito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechadeposito', array($fechadeposito));

        return parent::setFechadeposito($fechadeposito);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechadeposito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechadeposito', array());

        return parent::getFechadeposito();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontototal($montototal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontototal', array($montototal));

        return parent::setMontototal($montototal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontototal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontototal', array());

        return parent::getMontototal();
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

    /**
     * {@inheritDoc}
     */
    public function setEmailEnviado($emailEnviado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailEnviado', array($emailEnviado));

        return parent::setEmailEnviado($emailEnviado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailEnviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailEnviado', array());

        return parent::getEmailEnviado();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivoEnviado($archivoEnviado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivoEnviado', array($archivoEnviado));

        return parent::setArchivoEnviado($archivoEnviado);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivoEnviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivoEnviado', array());

        return parent::getArchivoEnviado();
    }

}
