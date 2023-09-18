<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CobrosCredenciales extends \AppBundle\Entity\CobrosCredenciales implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcobrocred', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcredencial', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechapago', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'estadoaplic', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'terminalId', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'termSeqNum', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaprocesopf', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'emailenviado', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcobroEstado', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechainformadoOl', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idmedio', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaconfirmacion', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechareversa', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idpago');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcobrocred', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcredencial', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaingreso', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechapago', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'importe', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'estadoaplic', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'terminalId', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'termSeqNum', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'activo', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaprocesopf', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'emailenviado', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idcobroEstado', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechainformadoOl', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idmedio', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechaconfirmacion', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'fechareversa', '' . "\0" . 'AppBundle\\Entity\\CobrosCredenciales' . "\0" . 'idpago');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CobrosCredenciales $proxy) {
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
    public function getIdcobrocred()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcobrocred();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcobrocred', array());

        return parent::getIdcobrocred();
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
    public function setIdcredencial($idcredencial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcredencial', array($idcredencial));

        return parent::setIdcredencial($idcredencial);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcredencial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcredencial', array());

        return parent::getIdcredencial();
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

    /**
     * {@inheritDoc}
     */
    public function setEstadoaplic($estadoaplic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoaplic', array($estadoaplic));

        return parent::setEstadoaplic($estadoaplic);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoaplic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoaplic', array());

        return parent::getEstadoaplic();
    }

    /**
     * {@inheritDoc}
     */
    public function setTerminalId($terminalId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTerminalId', array($terminalId));

        return parent::setTerminalId($terminalId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTerminalId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTerminalId', array());

        return parent::getTerminalId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTermSeqNum($termSeqNum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTermSeqNum', array($termSeqNum));

        return parent::setTermSeqNum($termSeqNum);
    }

    /**
     * {@inheritDoc}
     */
    public function getTermSeqNum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTermSeqNum', array());

        return parent::getTermSeqNum();
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
    public function setFechaprocesopf($fechaprocesopf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaprocesopf', array($fechaprocesopf));

        return parent::setFechaprocesopf($fechaprocesopf);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaprocesopf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaprocesopf', array());

        return parent::getFechaprocesopf();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailenviado($emailenviado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailenviado', array($emailenviado));

        return parent::setEmailenviado($emailenviado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailenviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailenviado', array());

        return parent::getEmailenviado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcobroEstado($idcobroEstado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcobroEstado', array($idcobroEstado));

        return parent::setIdcobroEstado($idcobroEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcobroEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcobroEstado', array());

        return parent::getIdcobroEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechainformadoOl($fechainformadoOl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechainformadoOl', array($fechainformadoOl));

        return parent::setFechainformadoOl($fechainformadoOl);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechainformadoOl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechainformadoOl', array());

        return parent::getFechainformadoOl();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmedio($idmedio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmedio', array($idmedio));

        return parent::setIdmedio($idmedio);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmedio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmedio', array());

        return parent::getIdmedio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaconfirmacion($fechaconfirmacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaconfirmacion', array($fechaconfirmacion));

        return parent::setFechaconfirmacion($fechaconfirmacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaconfirmacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaconfirmacion', array());

        return parent::getFechaconfirmacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechareversa($fechareversa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechareversa', array($fechareversa));

        return parent::setFechareversa($fechareversa);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechareversa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechareversa', array());

        return parent::getFechareversa();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdpago($idpago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdpago', array($idpago));

        return parent::setIdpago($idpago);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdpago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpago', array());

        return parent::getIdpago();
    }

}
